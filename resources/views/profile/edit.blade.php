@extends('admin.layouts.master')
@section('admin.layouts.index')

                    <!-- Content Row -->
                    <div class="row">               
                        <h2>Profile</h2>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <x-app-layout>
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">                             
                                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                        <div class="max-w-xl">
                                            @include('profile.partials.foto-profil')
                                        </div>
                                    </div>

                                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                        <div class="max-w-xl">
                                            @include('profile.partials.update-profile-information-form')
                                        </div>
                                    </div>

                                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                        <div class="max-w-xl">
                                            @include('profile.partials.update-password-form')
                                        </div>
                                    </div>

                                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                        <div class="max-w-xl">
                                            @include('profile.partials.delete-user-form')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </x-app-layout>
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

