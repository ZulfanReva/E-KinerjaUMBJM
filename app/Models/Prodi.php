<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model Prodi
class Prodi extends Model
{
    protected $table = 'prodi'; // Tentukan nama tabel secara eksplisit

    protected $fillable = ['nama_prodi'];

    public function dosens()
    {
        return $this->hasMany(Dosen::class);
    }
}