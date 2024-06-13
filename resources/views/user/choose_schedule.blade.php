@extends('user.layouts.master')

@section('user.layouts.index')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Jadwal Kelas</title>
</head>
<style>
        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
    <div class="container">
        <div class="container">
        <h3 class="text-center" style="font-family: 'Times New Roman';">Pilih Jadwal Kelas</h3>
        <form action="{{ route('bookings.chooseSchedule', $booking->id_booking) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="duration">Nama Kelas : </label>
                <input type="text" class="form-control" value="{{ $booking->program->nama_program }}" readonly>
            </div>

            <div class="form-group">
                <label for="class_id_1">Pilih Jadwal Kelas dan Trainer : </label>
                <select name="class_ids[]" id="class_id_1" class="form-control">
                @foreach($classes as $class)
                    @if($class->class_name == $booking->program->nama_program)
                        <option value="{{ $class->id_class }}">{{ $class->class_name }} - {{ $class->trainer->name }} - {{ $class->day }} {{ date('H:i', strtotime($class->start_time)) }} - {{ date('H:i', strtotime($class->end_time)) }}</option>
                    @endif
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="duration">Durasi : </label>
                <input type="text" name="duration" id="duration" class="form-control" value="{{ $duration }} Bulan" readonly>
            </div>

            <div class="form-group">
                <label for="start_date">Tanggal Mulai:</label>
                <input type="date" name="start_date" id="start_date" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="end_date">Tanggal Selesai:</label>
                <input type="date" name="end_date" id="end_date" class="form-control" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Kelas</button>
            <a href="{{ route('user.booking') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Fungsi menentukan tanggal mulai berdasarkan hari ini
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;

        document.getElementById("start_date").value = today;

        // Fungsi menghitung tanggal selesai berdasarkan durasi program
        function calculateEndDate() {
            var startDate = new Date(document.getElementById("start_date").value);
            var duration = parseInt(document.getElementById("duration").value);

            startDate.setMonth(startDate.getMonth() + duration);

            var endDate = startDate.getFullYear() + '-' + ('0' + (startDate.getMonth() + 1)).slice(-2) + '-' + ('0' + startDate.getDate()).slice(-2);

            document.getElementById("end_date").value = endDate;
        }

        document.getElementById("duration").addEventListener("change", calculateEndDate);

        calculateEndDate();
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