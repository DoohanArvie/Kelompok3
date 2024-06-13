<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Booking;
use App\Models\Program;
use App\Models\Classes;
use App\Models\BookingClass;
use Barryvdh\DomPDF\Facade\Pdf;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.dataBooking.index', compact('bookings'));
    }

    public function viewBooking()
    {
        $userId = Auth::id();

        $bookings = Booking::where('user_id', $userId)->get();

        return view('user.layouts.booking', compact('bookings'));
    }

    public function submitBooking(Request $request)
    {
        $programId = $request->program_id;

        $program = Program::find($programId);

        if (!$program) {
            return response()->json(['error' => 'Produk tidak ditemukan'], 404);
        }

        $totalPayment = $program->price * $request->duration;

        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->id_program = $programId;
        $booking->duration = $request->duration;
        $booking->total_payment = $totalPayment;

        $booking->save();

        return Redirect::route('user.booking')->with('success', 'Booking berhasil.');
    }

    public function bookingForm(Request $request)
    {
        $programId = $request->query('program_id');
        $program = Program::findOrFail($programId);

        return view('user.booking', compact('program'));
    }

    public function generateInvoice($id_booking)
    {
        $booking = Booking::find($id_booking);

        if (!$booking) {
            return redirect()->back()->with('error', 'Booking tidak ditemukan');
        }

        if ($booking->user_id !== Auth::id()) {
            return abort(403, 'Unauthorized');
        }

        $pdf = PDF::loadView('user.bookinvoice', compact('booking'));

        return $pdf->download('bukti_booking_' . $booking->id_booking . '_' . $booking->user->name . '.pdf');
    }

    public function showChooseScheduleForm($bookingId)
    {
        $booking = Booking::findOrFail($bookingId);
        $classes = Classes::all();
        $duration = $booking->duration;

        return view('user.choose_schedule', compact('booking', 'classes', 'duration'));
    }

    public function chooseSchedule(Request $request, $bookingId)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $booking = Booking::findOrFail($bookingId);
        $classIds = $request->input('class_ids');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $syncData = [];
        foreach ($classIds as $classId) {
            $syncData[$classId] = ['start_date' => $startDate, 'end_date' => $endDate];
        }

        $booking->classes()->sync($syncData);

        return redirect()->route('user.myschedule')->with('success', 'Jadwal Kelas berhasil dipilih.');
    }

    public function mySchedule()
    {
        $user = Auth::user();
        $bookings = Booking::where('user_id', $user->id)->get();
        
        $selectedClasses = BookingClass::whereIn('id_booking', $bookings->pluck('id_booking'))->with('booking.program', 'class')->get();

        return view('user.layouts.myschedule', compact('selectedClasses'));
    }

}