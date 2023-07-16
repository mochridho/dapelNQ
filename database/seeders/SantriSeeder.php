<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $santri = [
            'nis' => '123456',
            'nama_santri' => 'Muhammad Fauzan',
            'nama_wali' => 'Abdul Aziz',
            'jk' => 'L',
            'tgl_lahir' => '2003-07-16',
            'kamar' => 'Ar Raudhah',
            'pendidikan' => 'SMA',
            'no_hp' => '081234567890',
            'alamat' => 'Jl. Raya Cipadung No. 9',
        ];
        \App\Models\Santri::create($santri);
    }
}
