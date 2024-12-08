<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Dosen extends Model
{
    protected $table = 'dosen'; // Nama tabel di database
    protected $fillable = ['nama_dosen', 'nidn', 'prodi_id', 'status'];

    // Relasi dengan tabel prodi
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
   
    }
}