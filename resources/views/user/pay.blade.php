@extends('user.layouts.master')
@section('user.layouts.index')
<div class="container">
    <h3 class="text-center">Pembayaran</h3>
    <div class="text-center">
        <button id="pay-button" class="btn btn-success">Bayar Sekarang</button>
    </div>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function() {
        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                console.log(result);
                window.location.href = '{{ route('user.cart')}}';
            },
            onPending: function(result) {
                console.log(result);
                window.location.href = '{{ route('user.cart')}}';
            },
            onError: function(result) {
                console.error('Error during payment:', result);
                alert('Terjadi kesalahan saat pembayaran. Silakan coba lagi atau hubungi dukungan pelanggan.');
                window.location.href = '{{ route('user.cart')}}';
            },
            onClose: function() {
                alert('Anda menutup popup tanpa menyelesaikan pembayaran.');
                window.location.href = '{{ route('user.cart')}}';
            }
        });
    };
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
