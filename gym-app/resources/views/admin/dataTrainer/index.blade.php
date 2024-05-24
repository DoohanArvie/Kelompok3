@extends('admin.layouts.master')
@section('admin.layouts.index')
<div class="row">               
    <h3 class="text-center" style="font-family: Times New Roman;">Daftar Trainer</h3>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-12 mb-3">
        <a href="{{ route('admin.dataTrainer.create') }}" class="btn btn-primary" role="button" style="font-family: Times New Roman;">Tambah Trainer</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="font-family: Times New Roman;">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">Umur</th>
                        <th class="text-center">Telepon</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainers as $index => $trainer)
                        <tr class="text-center">
                            <td>{{ $index + 1 }}</td>
                            <td class="text-center">
                                <img src="{{ asset('/storage/trainers/' . $trainer->picture)}}" class="rounded" style="width: 50px">
                            </td>
                            <td>{{ $trainer->name }}</td>
                            <td>{{ $trainer->category }}</td>
                            <td class="text-justify">{{ $trainer->description }}</td>
                            <td>{{ $trainer->gender }}</td>
                            <td>{{ $trainer->age }}</td>
                            <td>{{ $trainer->phone }}</td>
                            <td>
                                <a href="{{ route('admin.dataTrainer.edit', ['id' => $trainer->id_trainers]) }}" class="btn btn-warning btn-sm mb-1" role="button"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('admin.dataTrainer.destroy', ['id' => $trainer->id_trainers]) }}" class="btn btn-danger btn-sm" role="button"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection            
