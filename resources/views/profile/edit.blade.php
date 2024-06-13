@extends('admin.layouts.master')

@section('admin.layouts.index')
<style>
    .bg-custom {
        background-color: #f9fafb;
    }
    .shadow-custom {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .input-focus:focus {
        border-color: #4a90e2;
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
    }
    .btn-custom {
        background-color: #4a90e2;
        color: #fff;
    }
    .btn-custom:hover {
        background-color: #357abd;
    }
</style>

<div style="background-color: #f9fafb; padding: 2rem; max-width: 70rem; margin: auto;">
    <div style="background-color: #fff; border-radius: 0.5rem; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div style="padding: 1.5rem;">
            <div style="font-weight: bold; font-size: 1.875rem; text-align: center; margin-bottom: 1.5rem; color: #3b82f6;">Edit Profile</div>
            <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div style="margin-bottom: 1rem;">
                    <label for="name" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Nama:</label>
                    <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" style="width: 100%; border: 1px solid #d1d5db; padding: 0.5rem; border-radius: 0.375rem; transition: border-color 0.2s, box-shadow 0.2s;"/>
                </div>

                <!-- Email Address -->
                <div style="margin-bottom: 1rem;">
                    <label for="email" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Email Address:</label>
                    <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username" style="width: 100%; border: 1px solid #d1d5db; padding: 0.5rem; border-radius: 0.375rem; transition: border-color 0.2s, box-shadow 0.2s;"/>
                </div>

                <!-- Phone -->
                <div style="margin-bottom: 1rem;">
                    <label for="phone" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Telepon:</label>
                    <input id="phone" type="text" name="phone" value="{{ old('phone', $user->phone) }}" style="width: 100%; border: 1px solid #d1d5db; padding: 0.5rem; border-radius: 0.375rem; transition: border-color 0.2s, box-shadow 0.2s;"/>
                </div>

                <!-- Gender -->
                <div style="margin-bottom: 1rem;">
                    <label for="gender" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Gender:</label>
                    <select id="gender" name="gender" style="width: 100%; border: 1px solid #d1d5db; padding: 0.5rem; border-radius: 0.375rem; transition: border-color 0.2s, box-shadow 0.2s;">
                        <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <!-- Age -->
                <div style="margin-bottom: 1rem;">
                    <label for="age" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Usia:</label>
                    <input id="age" type="number" name="age" value="{{ old('age', $user->age) }}" style="width: 100%; border: 1px solid #d1d5db; padding: 0.5rem; border-radius: 0.375rem; transition: border-color 0.2s, box-shadow 0.2s;"/>
                </div>

                <!-- Address -->
                <div style="margin-bottom: 1rem;">
                    <label for="address" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Alamat:</label>
                    <textarea id="address" name="address" rows="4" style="width: 100%; border: 1px solid #d1d5db; padding: 0.5rem; border-radius: 0.375rem; transition: border-color 0.2s, box-shadow 0.2s;">{{ old('address', $user->address) }}</textarea>
                </div>

                <!-- Picture -->
                <div style="margin-bottom: 1rem;">
                    <label for="picture" style="display: block; color: #4a5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Foto Profil:</label>
                    <input id="picture" type="file" name="picture" style="width: 100%; border: 1px solid #d1d5db; padding: 0.5rem; border-radius: 0.375rem; transition: border-color 0.2s, box-shadow 0.2s;">
                </div>

                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <button type="submit" style="background-color: #4a90e2; color: #fff; padding: 0.5rem 1rem; border-radius: 0.375rem; transition: background-color 0.2s;">Simpan Perubahan</button>
                </div>
            </form>
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
