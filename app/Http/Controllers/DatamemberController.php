<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DatamemberController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.dataMember.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.dataMember.edit', compact('user'));
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

        return redirect()->route('admin.dataMembers.index')->with('success', 'Data member berhasil diperbarui');
    }
}
