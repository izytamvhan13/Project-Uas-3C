<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Metode untuk registrasi
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:penggunas|max:255',
            'password' => 'required|min:6|confirmed', // Gunakan konfirmasi password
        ]);

        // Simpan pengguna baru dengan hashing password
        Pengguna::create([
            'username' => $request->username,
            'password' => Hash::make($request->password), // Hash password
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Registration successful! You can now log in.');
    }

    // Metode untuk login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek kredensial menggunakan Auth guard
        if (Auth::guard('pengguna')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // Jika berhasil login, arahkan ke dashboard/home
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        // Jika gagal login, kembali ke halaman login dengan pesan error
        return redirect('/login')->with('error', 'Invalid username or password.');
    }

    // Metode untuk logout
    public function logout()
    {
        Auth::guard('pengguna')->logout(); // Logout dari guard pengguna
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
