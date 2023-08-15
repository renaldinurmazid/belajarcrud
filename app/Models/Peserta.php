<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';
    
    protected $fillable = [
        'nis', 'namalengkap', 'jk', 'kelas', 'tgllahir', 'nilai_web', 'nilai_pbo', 'nilai_db',
    ];
}
