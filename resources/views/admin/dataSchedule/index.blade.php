@extends('admin.layouts.master')
@section('addCss')
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endsection
@section('addJavascript')
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.min.js') }}"></script>
    <script>
        $.fn.dataTable.ext.errMode = 'throw';
        $(function() {
        $("#data-table").DataTable({
            paging: true
        });
        });
    </script>
@endsection
@section('admin.layouts.index')
    <div class="container">
        <h3 class="text-center mb-3">Jadwal Sesi Kelas</h3>
        <table class="table table-hover table-bordered mb-3" id="data-table">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID Booking</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Program</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>                  
                </tr>
            </thead>
            <tbody>
                @foreach($bookingClasses as $bookingClass)
                    <tr class="text-center">
                        <td class="text-center">{{ $bookingClass->booking->id_booking }}</td>
                        <td>{{ $bookingClass->booking->user->name}}</td>
                        <td>{{ $bookingClass->booking->program->nama_program }}</td>
                        <td>{{ $bookingClass->class->day }} {{ date('H:i', strtotime($bookingClass->class->start_time)) }} - {{ date('H:i', strtotime($bookingClass->class->end_time)) }}</td>
                        <td>{{ $bookingClass->booking->duration}} Bulan</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($bookingClass->start_date)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($bookingClass->end_date)->locale('id')->isoFormat('D MMMM YYYY') }}</td>                   
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<!-- Content Row -->
<div class="row">
        <!-- ISI KONTEN -->
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
