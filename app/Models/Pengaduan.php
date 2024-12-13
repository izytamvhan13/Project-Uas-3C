<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'layanan_id',
        'status',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
    
}
