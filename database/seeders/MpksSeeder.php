<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class MpksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggotas = [
            [
                'nama_anggota' => 'Atha Raditya Primald',
                'foto' => '1.png',
                'kelas' => 'X SIJA 1',
            ],
            [
                'nama_anggota' => 'Brahma Alfaris Reyraharjo',
                'foto' => '2.png',
                'kelas' => 'X SIJA 1',
            ],
            [
                'nama_anggota' => 'Saqa Pandega Adha Dananjaya',
                'foto' => '3.png',
                'kelas' => 'X SIJA 2',
            ],
            [
                'nama_anggota' => 'Evan Satria Mahardika',
                'foto' => '4.png',
                'kelas' => 'X SIJA 2',
            ],
        ];

        foreach ($anggotas as $anggota) {
            Anggota::create($anggota);
        }
    }
}
