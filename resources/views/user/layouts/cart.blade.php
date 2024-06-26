@extends('user.layouts.master')

@section('user.layouts.index')
<div class="container">
    <h3 class="text-center" style="font-family: Times New Roman;">Paket Gym dan Fitness</h3>
    @if($orders->isEmpty())
        <p>Keranjang Anda kosong</p>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID Pesanan</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Tanggal Pemesanan</th>
                        <th class="text-center">Durasi (Hari)</th>
                        <th class="text-center">Total Pembayaran</th>
                        <!-- <th class="text-center">Status Pembayaran</th> -->
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    @php
                                $orderDate = \Carbon\Carbon::parse($order->order_date);
                                $orderDate->setTimezone('Asia/Jakarta');
                                $today = \Carbon\Carbon::now('Asia/Jakarta');
                            @endphp
                            @if($orderDate->isToday() || $orderDate->greaterThan($today))                            <tr id="order_{{ $order->id_order }}">
                                <td class="text-center">{{ $order->id_order }}</td>
                                <td class="text-center">{{ $order->product->name_product }}</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($order->order_date)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                                <td class="text-center">{{ $order->duration }}</td>
                                <td class="text-center">Rp. {{ number_format($order->total_payment, 0, ',', '.') }}</td>
                                <!-- <td class="text-center" id="payment_status_{{ $order->id_order }}">
                                    @if(is_null($order->payment_date))
                                        <span class="badge badge-warning">Menunggu Pembayaran</span>
                                    @else
                                        <span class="badge badge-success">Lunas</span>
                                    @endif
                                </td> -->
                                <td class="text-center">
                                    @if(is_null($order->payment_date))
                                        <a href="{{ route('pay', $order->id_order) }}" class="btn btn-success">Bayar</a>
                                    @else
                                        <a href="{{ route('generate.invoice', $order->id_order) }}" class="btn btn-primary">Cetak</a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

<!-- Script for updating payment status dynamically -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    function updatePaymentStatus(orderId) {
        $.ajax({
            type: 'GET',
            url: '{{ route("order.status", ":orderId") }}'.replace(':orderId', orderId),
            success: function(data) {
                var paymentStatus = data.payment_status;
                if (paymentStatus == 'Lunas') {
                    $('#payment_status_' + orderId).html('<span class="badge badge-success">Lunas</span>');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
</script>   
    
 <!-- Content Row -->
 <div class="row">
        <!-- ISI KONTEN -->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
