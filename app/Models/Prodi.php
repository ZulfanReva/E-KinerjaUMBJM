<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi'; // Nama tabel di database
    protected $fillable = ['nama_prodi']; // Kolom-kolom yang bisa diisi secara massal
    protected $primarykey = 'id';
}