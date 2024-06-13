<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DatauserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.dataUser.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:15',
        'gender' => 'nullable|string|max:10',
        'age' => 'nullable|integer|min:0',
        'address' => 'nullable|string|max:255',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->gender = $request->gender;
    $user->age = $request->age;
    $user->address = $request->address;

    // Menangani upload gambar
    if ($request->hasFile('picture')) {
        // Hapus gambar profil lama jika ada
        if ($user->picture) {
            Storage::disk('public')->delete($user->picture);
        }

        $picture = $request->file('picture');
        $pictureName = time() . '_' . $picture->getClientOriginalName();
        $picture->storeAs('public/user', $pictureName);

        // Simpan path gambar ke dalam atribut picture
        $user->picture = 'user/' . $pictureName;
    }

    $user->save();

    if ($user->userType === 'user') {
        return redirect()->route('user.pesanan', $user->id)->with('success', 'Profil berhasil diupdate.');
    } elseif ($user->userType === 'admin') {
        return redirect()->route('admin.dataUsers.index', $user->id)->with('success', 'Profil berhasil diupdate.');
    }
}

    public function addPhotoForm($id)
    {
        $user = User::findOrFail($id);

        if ($user->userType === 'user') {
            return view('user.profile.edit', compact('user'));
        } elseif ($user->userType === 'admin') {
            return view('admin.profile.edit', compact('user'));
        }

        return redirect()->route('home')->with('error', 'Invalid user type.');
    }

}
