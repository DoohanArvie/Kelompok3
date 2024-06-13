<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;
use App\Models\Order;

class PaymentController extends Controller
{
    public function pay($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Prepare unique order_id to avoid conflicts
        $uniqueOrderId = $order->id_order . '-' . time();

        // Prepare transaction details
        $transactionDetails = [
            'order_id' => $uniqueOrderId,
            'gross_amount' => $order->total_payment,
        ];

        // Prepare item details
        $itemDetails = [
            [
                'id' => $order->product->id_product,
                'price' => $order->product->price,
                'quantity' => 1,
                'name' => $order->product->name_product,
            ],
        ];

        // Prepare customer details
        $customerDetails = [
            'first_name' => $order->user->name,
            'email' => $order->user->email,
        ];

        // Prepare transaction payload
        $transaction = [
            'transaction_details' => $transactionDetails,
            'item_details' => $itemDetails,
            'customer_details' => $customerDetails,
            'callbacks' => [
                'finish' => route('payment.notification') // URL for notification handling
            ]
        ];

        try {
            $snapToken = Snap::getSnapToken($transaction);
            return view('user.pay', compact('snapToken', 'order'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function notificationHandler(Request $request)
    {
        // Set Midtrans configuration
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        try {
            $notif = new Notification();

            $transaction = $notif->transaction_status;
            $fraud = $notif->fraud_status;
            $orderId = explode('-', $notif->order_id)[0];
            $order = Order::where('id_order', $orderId)->first();

            if ($order) {
                switch ($transaction) {
                    case 'capture':
                        if ($fraud == 'challenge') {
                            // Set payment status in merchant's database to 'challenge'
                            $order->status = 'Challenge';
                        } else if ($fraud == 'accept') {
                            // Set payment status in merchant's database to 'success'
                            $order->payment_date = now();
                            $order->status = 'Lunas';
                        }
                        break;
                    case 'cancel':
                    case 'expire':
                        // Set payment status in merchant's database to 'failure'
                        $order->status = 'Failure';
                        break;
                    case 'deny':
                        // Set payment status in merchant's database to 'failure'
                        $order->status = 'Denied';
                        break;
                    case 'pending':
                        // Set payment status in merchant's database to 'pending'
                        $order->status = 'Pending';
                        break;
                    default:
                        // Handle other cases if needed
                        break;
                }
                $order->save();
                return response()->json(['payment_status' => $order->status]);
            } else {
                return response()->json(['message' => 'Order not found'], 404);
            }
        } catch (\Exception $e) {
            error_log('Error in notification handler: ' . $e->getMessage());
            return response()->json(['message' => 'Error handling notification'], 500);
        }
    }
}
