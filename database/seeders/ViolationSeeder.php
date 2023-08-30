<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViolationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $violations = [
            [
                'keterangan_pelanggaran' => 'ghosap',
                'slug' => 'ghosap-awdwd',
                'kategori_pelanggaran' => 'ringan',
            ],
            [
                'keterangan_pelanggaran' => 'keluar pesantren tanpa izin',
                'slug' => 'keluar-pesantren-tanpa-izin-wddaz',
                'kategori_pelanggaran' => 'ringan',
            ],
            [
                'keterangan_pelanggaran' => 'tidak mengikuti kegiatan ubudiyah',
                'slug' => 'tidak-mengikuti-kegiatan-ubudiyah-acaww',
                'kategori_pelanggaran' => 'ringan',
            ],
            [
                'keterangan_pelanggaran' => 'berkelahi',
                'slug' => 'berkelahi-qwqwd',
                'kategori_pelanggaran' => 'berat',
            ],
            [
                'keterangan_pelanggaran' => 'mengkonsumsi bahan berbahaya',
                'slug' => 'mengkonsumsi-bahan-berbahaya-agwad',
                'kategori_pelanggaran' => 'berat',
            ]
        ];
        foreach ($violations as $violation) {
            \App\Models\Violation::create($violation);
        }
    }
}
