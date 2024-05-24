<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function index()
    {

        $ulasan = Ulasan::with('user')->get();
        return view('welcome', compact('ulasan'));
    }

    public function store(Request $request)
{
    // Memeriksa apakah pengguna terotentikasi
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Anda harus masuk terlebih dahulu.');
    }
    
    // Validasi data yang diterima dari request
    $validatedData = $request->validate([
        'rating' => 'required|integer|between:1,5',
        'ulasan' => 'required|string|max:255',
    ]);

    // Ambil ID pengguna yang terotentikasi
    $user_id = auth()->id();

    // Buat ulasan baru
    $ulasan = new Ulasan();
    $ulasan->user_id = $user_id;
    $ulasan->rating = $validatedData['rating'];
    $ulasan->ulasan = $validatedData['ulasan'];
    $ulasan->save();

    // Redirect pengguna kembali ke halaman welcome dengan pesan sukses
    return redirect()->route('dashboard')->with('success', 'Ulasan berhasil ditambahkan.');
}

}