<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_layanan',
        'foto',
        'deskripsi',
    ];

    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class);
    }
}
