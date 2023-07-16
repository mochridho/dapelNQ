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
                'kategori_sanksi' => 'Moral',
            ],
            [
                'keterangan_sanksi' => 'pembersihan surat kepada orang tua',
                'slug' => 'pembersihan-surat-kepada-orang-tua-awdaw',
                'kategori_sanksi' => 'Kode etik',
            ],
            [
                'keterangan_sanksi' => 'membayar denda',
                'slug' => 'membayar-denda-da33aw',
                'kategori_sanksi' => 'Administrasi',
            ],
            [
                'keterangan_sanksi' => 'kartu kuning dan berdiri di halaman pesantren',
                'slug' => 'kartu-kuning-dan-berdiri-di-halaman-pesantren-aw23w',
                'kategori_sanksi' => 'Moral',
            ],
        ];
        foreach ($sanctions as $sanction) {
            \App\Models\Sanction::create($sanction);
        }
    }
}
