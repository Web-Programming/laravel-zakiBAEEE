<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    // protected $table = "mahasiswas";

    // Untuk mengatur kolom yang boleh diisi saat mass insert
    protected $fillable = ['npm', 'nama', 'tempat_lahir', 'tanggal_lahir'];

    // Untuk mengatur kolom yang tidak boleh diisi (Opsional)
    protected $guard = [];
}
