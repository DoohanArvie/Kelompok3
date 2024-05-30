@extends('admin.layouts.master')
@section('admin.layouts.index')
<div class="row">               
    <h3 class="text-center" style="font-family: Times New Roman;">Produk Fitnes</h3>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-12 mb-3">
        <a href="{{ route('admin.dataFitnes.create') }}" class="btn btn-primary" role="button" style="font-family: Times New Roman;">Tambah Trainer</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="font-family: Times New Roman;">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr class="text-center">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $product->name_product }}</td>
                            <td class="text-center">
                                <img src="{{ asset('/storage/product/' . $product->picture)}}" class="rounded" style="width: 50px">
                            </td>
                            
                            <td>Rp.{{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('admin.dataFitnes.edit', ['id' => $product->id_product]) }}" class="btn btn-warning btn-sm mb-1" role="button"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('admin.dataFitnes.destroy', ['id' => $product->id_product]) }}" class="btn btn-danger btn-sm" role="button"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection            
