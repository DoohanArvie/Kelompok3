@extends('admin.layouts.master')
@section('admin.layouts.index')

                    <!-- Content Row -->
                    <div class="row">               
                        <h2>Data User</h2>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <table class="table table-hover table-bordered ml-3">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>User Type</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->userType }}</td>
                                        <td>
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.dataMember.edit', $user->id) }}">Edit</a>
                                        </td>
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