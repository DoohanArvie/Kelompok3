<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('admin.dataUser.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'userType' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->userType = $request->userType;
        $user->save();

        return redirect()->route('admin.dataUsers.index')->with('success', 'Data member berhasil diperbarui');
    }
}