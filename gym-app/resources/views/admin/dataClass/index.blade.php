@extends('admin.layouts.master')
@section('admin.layouts.index')
<div class="row">               
    <h3 class="text-center" style="font-family: Times New Roman;">Daftar Kelas</h3>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-12 mb-3">
        <a href="{{ route('admin.dataClass.create') }}" class="btn btn-primary" role="button" style="font-family: Times New Roman;">Tambah Kelas</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="font-family: Times New Roman;">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Trainer</th>
                        <th class="text-center">Nama Kelas</th>
                        <th class="text-center">Hari</th>
                        <th class="text-center">Jam Mulai</th>
                        <th class="text-center">Jam Selesai</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $index => $class)
                        <tr class="text-center">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $class->trainer->name }}</td>
                            <td>{{ $class->class_name }}</td>
                            <td>{{ $class->day }}</td>
                            <td>{{ $class->start_time }}</td>
                            <td>{{ $class->end_time }}</td>
                            <td>
                                <a href="{{ route('admin.dataClass.edit', ['id' => $class->id_class]) }}" class="btn btn-warning btn-sm mb-1" role="button"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('admin.dataClass.destroy', ['id' => $class->id_class]) }}" class="btn btn-danger btn-sm" role="button"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
