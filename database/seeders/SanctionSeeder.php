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
                'nama_sanksi' => 'berdiri di halaman pesantren',
                'kategori_sanksi' => 'ringan',
            ],
            [
                'nama_sanksi' => 'merangkak di halaman pesantren',
                'kategori_sanksi' => 'ringan',
            ],
            [
                'nama_sanksi' => 'kartu kuning dan berdiri di halaman pesantren',
                'kategori_sanksi' => 'berat',
            ],
            [
                'nama_sanksi' => 'di asingkan dari pesantren',
                'kategori_sanksi' => 'berat',
            ],
        ];
        foreach ($sanctions as $sanction) {
            \App\Models\Sanction::create($sanction);
        }
    }
}
