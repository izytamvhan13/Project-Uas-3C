<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Layanan;
use App\Models\Feedback;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    // Menampilkan form pengaduan
    public function create()
    {
        // Mengambil semua layanan untuk dropdown
        $layanans = Layanan::all();
        return view('pengaduan.create', compact('layanans'));
    }

    // Menyimpan data pengaduan
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'layanan_id' => 'required|exists:layanans,id',
        ]);

        // Membuat pengaduan baru
        Pengaduan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'layanan_id' => $request->layanan_id,
            'status' => 'pending', // Status default
        ]);

        // Redirect atau memberikan respon
        return redirect()->route('pengaduan.create')->with('success', 'Pengaduan berhasil dikirim!');
    }

    public function index()
    {
        $layanans = Layanan::all(); // Ambil semua layanan
        $feedbacks = Feedback::all(); // Ambil semua feedback dari database
        
        // Mengembalikan view dengan data layanan dan feedback
        return view('home', compact('layanans', 'feedbacks'));
    }

}
