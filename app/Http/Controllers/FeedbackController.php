<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Menampilkan semua feedback
    public function index()
    {
        $feedbacks = Feedback::all(); // Ambil semua feedback dari database
        return view('home', compact('feedbacks')); // Kembalikan view home dengan data feedback
    }

    // Menyimpan feedback baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan feedback ke database
        Feedback::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect atau memberikan respon
        return redirect()->back()->with('success', 'Feedback berhasil dikirim!');
    }
}

