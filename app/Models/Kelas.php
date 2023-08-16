<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas'; // Nama tabel dalam database

    protected $fillable = [
        'nama_kelas','id'
    ];

    public $timestamps = false;

    public function siswa()
    {
        return $this->hasMany(Peserta::class, 'kelas_id');
    }
}
