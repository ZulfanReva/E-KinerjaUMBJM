<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Dosen extends Model
{
    protected $fillable = ['nama_dosen', 'nidn', 'prodi_id', 'status'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class); // Relasi ke model Prodi
    }
}