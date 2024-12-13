<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:penggunas|max:255',
            'password' => 'required|min:6',
        ]);

        // Simpan pengguna baru tanpa hashing password
        Pengguna::create([
            'username' => $request->username,
            'password' => $request->password, // Simpan password tanpa hashing
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect('/login')->with('success', 'Registration successful! You can now log in.');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek kredensial menggunakan model Pengguna
        if (Auth::guard('pengguna')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // Jika berhasil, redirect ke halaman home
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return redirect('/login')->with('error', 'Invalid username or password.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
