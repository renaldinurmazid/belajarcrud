<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data kelas yang ingin Anda masukkan
        $kelasData = [
            ['nama_kelas' => '12 RPL 1'],
            ['nama_kelas' => '12 RPL 2'],
            ['nama_kelas' => '12 TKJ 1'],
            ['nama_kelas' => '12 TKJ 2'],
            // Tambahkan data kelas lainnya
        ];

        // Masukkan data ke dalam tabel "kelas"
        DB::table('kelas')->insert($kelasData);
    }
}
