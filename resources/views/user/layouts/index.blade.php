@extends('user.layouts.master')

@section('user.layouts.index')
<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-4">
        <!-- Content -->
        <style>
            body {
                background-color: #f8f9fa;
            }
            .profile-card {
                border: 1px solid #e3e6f0;
                border-radius: 0.75rem;
                box-shadow: 0 0.15rem 1.75rem 0 rgba(58,59,69,0.15);
                font-family: 'Times New Roman', Times, serif;
            }
            .profile-header {
                background-color: #343a40;
                color: white;
                padding: 1rem 0;
            }
            .profile-photo {
                border: 4px solid #fff;
                margin-top: 7px;
            }
            .profile-info p {
                margin-bottom: 0.5rem;
            }
            .btn-edit-profile {
                padding-left: 1.25rem;
                padding-right: 1.25rem;
            }
        </style>

        <div class="container mt-0 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card profile-card">
                        <div class="card-header profile-header text-center">
                            <h3>Profil Saya</h3>
                        </div>
                        <div class="card-body text-center">
                            <!-- Profile Photo -->
                            <img src="{{ asset('storage/' . $user->picture) }}" alt="Foto {{ $user->name }}" class="rounded-circle profile-photo mb-3" style="max-width: 250px; max-height: 250px;">
                            
                            <!-- User Name -->
                            <h4 class="card-title">{{ Auth::user()->name }}</h4>

                            <!-- User Info -->
                            <div class="text-left profile-info">
                                <p class="mb-2"><strong>Email : </strong></p>
                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                
                                <p class="mb-2"><strong>Phone : </strong></p>
                                <p class="text-muted">{{ Auth::user()->phone }}</p>

                                <p class="mb-2"><strong>Jenis Kelamin : </strong></p>
                                @if(Auth::user()->gender === 'male')
                                    <p class="text-muted">Laki-laki</p>
                                @elseif(Auth::user()->gender === 'female')
                                    <p class="text-muted">Perempuan</p>
                                @endif

                                <p class="mb-2"><strong>Usia : </strong></p>
                                <p class="text-muted">{{ Auth::user()->age }} Tahun</p>

                                <p class="mb-2"><strong>Alamat : </strong></p>
                                <p class="text-muted">{{ Auth::user()->address }}</p>

                                <!-- Edit Profile Button -->
                                <div class="text-right mb-3">
                                    <a href="{{ route('profile.edit', Auth::id()) }}" class="btn btn-primary btn-sm btn-edit-profile">Edit Profile</a>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2"><strong>Password:</strong></p>
                                        <p class="text-muted d-inline">********</p>
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm">Ubah Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
