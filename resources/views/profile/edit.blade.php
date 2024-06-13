<x-guest-layout>
    <div class="bg-white-100 py-8 px-4 sm:px-6 lg:px-8 max-w-md mx-auto">
        <div class="max-w-[50%] mx-auto bg-white rounded-lg overflow-hidden shadow-xl">
            <div class="px-6 py-4">
                <div class="font-bold text-3xl text-center mb-6">Edit Profile</div>
                <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                        <input class="form-input w-full" id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address:</label>
                        <input class="form-input w-full" id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username" />
                    </div>

                    <!-- Phone -->
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Telepon:</label>
                        <input class="form-input w-full" id="phone" type="text" name="phone" value="{{ old('phone', $user->phone) }}" />
                    </div>

                    <!-- Gender -->
                    <div class="mb-4">
                        <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Gender:</label>
                        <select class="form-select w-full" id="gender" name="gender">
                            <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <!-- Age -->
                    <div class="mb-4">
                        <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Usia:</label>
                        <input class="form-input w-full" id="age" type="number" name="age" value="{{ old('age', $user->age) }}" />
                    </div>

                    <!-- Address -->
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Alamat:</label>
                        <textarea class="form-textarea w-full" id="address" name="address" rows="4">{{ old('address', $user->address) }}</textarea>
                    </div>

                    <!-- Picture -->
                    <div class="mb-4">
                        <label for="picture" class="block text-gray-700 text-sm font-bold mb-2">Foto Profil:</label>
                        <input class="form-input w-full" id="picture" type="file" name="picture">
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="btn bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
