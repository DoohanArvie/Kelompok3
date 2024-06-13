<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PasswordController extends Controller
{
    /**
     * Show the form for updating the password.
     */
    public function edit()
    {
        return view('user.layouts.form-update-pass');
    }

    /**
     * Update the user's password.
     */
    public function update(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'confirmed'],
        ]);
    
        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);
    
        Alert::success('Success', 'Password Berhasil Diubah!');
    
        return redirect()->route('user.pesanan');
    }
}
