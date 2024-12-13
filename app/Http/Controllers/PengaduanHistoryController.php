<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanHistoryController extends Controller
{
    // Menampilkan history pengaduan
    public function index()
    {
        // Mengambil semua data pengaduan
        $pengaduans = Pengaduan::all();
        return view('pengaduan.history', compact('pengaduans'));
    }
}
