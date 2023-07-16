<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sanctions = [
            [
                'keterangan_sanksi' => 'berdiri di halaman pesantren',
                'slug' => 'berdiri-di-halaman-pesantren-dawda',
                'kategori_sanksi' => 'ringan',
            ],
            [
                'keterangan_sanksi' => 'merangkak di halaman pesantren',
                'slug' => 'merangkak-di-halaman-pesantren-aweww',
                'kategori_sanksi' => 'ringan',
            ],
            [
                'keterangan_sanksi' => 'kartu kuning dan berdiri di halaman pesantren',
                'slug' => 'kartu-kuning-dan-berdiri-di-halaman-pesantren-atyww',
                'kategori_sanksi' => 'berat',
            ],
            [
                'keterangan_sanksi' => 'di asingkan dari pesantren',
                'slug' => 'di-asingkan-dari-pesantren-awwpo',
                'kategori_sanksi' => 'berat',
            ],
        ];
        foreach ($sanctions as $sanction) {
            \App\Models\Sanction::create($sanction);
        }
    }
}
