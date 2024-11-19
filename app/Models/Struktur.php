<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Struktur extends Model
{
    use HasFactory;

    protected $table = 'Strukturs'; // Sesuaikan dengan nama tabel Anda
    protected $fillable = ['Nama', 'Jabatan', 'sttt']; // Kolom yang bisa diisi
}
