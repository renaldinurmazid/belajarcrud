<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peserta')->insert([
            'nis' => '1234567890',
            'namalengkap' => 'Renaldi Nurmazid',
            'jk' => 'L',
            'kelas' => '12 RPL 1',
            'tgllahir' => '2005-09-16',
            'nilai_web' => 85,
            'nilai_pbo' => 90,
            'nilai_db' => 98,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
