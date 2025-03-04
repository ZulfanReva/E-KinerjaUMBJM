<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianPerilakuKerja extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'penilaian_perilakukerja'; // Ganti dengan nama tabel yang sesuai

    // Tentukan field yang dapat diisi massal
    protected $fillable = [
        'dosen_id',
        'users_id',
        'periode_id',
        'tanggal_penilaian',
        'integritas',
        'komitmen',
        'kerjasama',
        'orientasi_pelayanan',
        'disiplin',
        'kepemimpinan',
        'total_nilai',
    ];

    // Relasi ke tabel periode

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id'); // pastikan kolom foreign key benar
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id');
    }

    public function penilaianSISTER()
    {
        return $this->hasOne(PenilaianSISTER::class, 'dosen_id', 'dosen_id')
            ->whereColumn('periode_id', 'periode_id');
    }
}
