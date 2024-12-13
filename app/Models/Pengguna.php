<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable // Pastikan ini mengextends Authenticatable
{
    use Notifiable;

    protected $table = 'penggunas'; // Menentukan tabel yang digunakan

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Jika Anda ingin menggunakan hashing untuk password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value); // Meng-hash password sebelum disimpan
    }
}
