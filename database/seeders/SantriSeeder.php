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
            [
                'nis' => '123456',
                'nama_santri' => 'Muhammad Fauzan',
                'nama_wali' => 'Abdul Aziz',
                'jk' => 'L',
                'tgl_lahir' => '2003-07-16',
                'kamar' => 'Ar Raudhah',
                'pendidikan' => 'SMA',
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Raya Cipadung No. 9',
            ],
            [
                'nis' => '122457',
                'nama_santri' => 'Rudi Hartono',
                'nama_wali' => 'Topik Hidayat',
                'jk' => 'L',
                'tgl_lahir' => '2001-01-10',
                'kamar' => 'Al Kahfi',
                'pendidikan' => 'Aliyah',
                'no_hp' => '0811237890',
                'alamat' => 'Jl. Surya Sumantri No. 9',
            ],
            [
                'nis' => '133274',
                'nama_santri' => 'Aulia Rahman',
                'nama_wali' => 'Paijo',
                'jk' => 'P',
                'tgl_lahir' => '2002-01-30',
                'kamar' => "Al Anbiya'",
                'pendidikan' => 'SMP',
                'no_hp' => '0866637890',
                'alamat' => 'Jl. Kandaga No. 9',
            ]
        ];
        foreach ($santri as $key => $value) {
            \App\Models\Santri::create($value);
        }
    }
}
