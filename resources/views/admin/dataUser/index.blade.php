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
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        confirmDelete = function(button) {
            var url = $(button).data('url');
            swal({
            'title' : 'Konfirmasi Hapus',
            'text' : 'Apakah kamu yakin ingin menghapus data ini?',
            'dangermode' : true,
            'buttons' :true,
            }).then(function(value) {
            if (value) {
                window.location = url;
            }
            })
        }
  </script>
@endsection

@section('admin.layouts.index')

                    <!-- Content Row -->
                    <div class="row">               
                        <h3 class="text-center" style="font-family: Times New Roman;">Daftar User</h3>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered mb-3" id="data-table" style="font-family: Times New Roman;">
                                    <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">No.HP</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Usia</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">User Type</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $index => $user)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/' . $user->picture) }}" alt="Foto {{ $user->name }}" style="max-width: 70px; max-height: 80px;">
                                            </td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            <td class="text-center">{{ $user->phone}}</td>
                                            <td class="text-center">
                                                @if(Auth::user()->gender === 'male')
                                                    <p class="text-muted">Laki-laki</p>
                                                @elseif(Auth::user()->gender === 'female')
                                                    <p class="text-muted">Perempuan</p>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $user->age}} Tahun</td>
                                            <td>{{ $user->address}}</td>
                                            <td class="text-center">{{ $user->userType }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>                      
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