@extends('user.layouts.master')

@section('user.layouts.index')
    <div class="container">
        <h3 class="text-center mb-3">Jadwal Kelas Anda</h3>
        @if($selectedClasses->isEmpty())
            <p>Anda belum memiliki Kelas yang aktif</p>
        @else
        <table class="table table-hover table-bordered mb-3">
            <thead>
                <tr class="text-center">
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Jadwal Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($selectedClasses as $selectedClass)
                    @php
                        $endDate = \Carbon\Carbon::parse($selectedClass->end_date);
                        $today = \Carbon\Carbon::now();
                    @endphp

                    @if($endDate->isPast())
                        @continue
                    @endif
                    <tr class="text-center">
                        <td>{{ $selectedClass->booking->program->nama_program }}</td>
                        <td>{{ $selectedClass->booking->duration }} Bulan</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($selectedClass->start_date)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                        <td class="text-center">{{ \Carbon\Carbon::parse($selectedClass->end_date)->locale('id')->isoFormat('D MMMM YYYY') }}</td>
                        <td>{{ $selectedClass->class->day }} {{ date('H:i', strtotime($selectedClass->class->start_time)) }} - {{ date('H:i', strtotime($selectedClass->class->end_time)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('user.booking') }}" class="btn btn-primary mb-3">Kembali</a>
        @endif
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
