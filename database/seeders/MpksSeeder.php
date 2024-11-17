<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mpk;

class MpksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mpks = [
            [
                'nama_anggota' => 'Brahma Alfaris Reyraharjo',
                'foto' => '2,png',
                'kelas' => 'X SIJA 1',
            ],
            [
                'nama_anggota' => 'Atha Raditya Primaldi',
                'foto' => '1.png',
                'kelas' => 'X SIJA 1',
            ],
            [
                'nama_anggota' => 'Evan Satria M.',
                'foto' => '4.png',
                'kelas' => 'X SIJA 2',
            ],
            [
                'nama_anggota' => 'Saqa Pandega',
                'foto' => '3.png',
                'kelas' => 'X SIJA 2',
            ],
            [
                'nama_anggota' => 'Farrel Al Farizi Putra Ahmad',
                'foto' => '6.png',
                'kelas' => 'X TJAT 1',
            ],
            [
                'nama_anggota' => 'Mahafreen Chesna Nugroho',
                'foto' => '5.png',
                'kelas' => 'X TJAT 1',
            ],
            [
                'nama_anggota' => 'Zeirra Hanny Kayla Amirah',
                'foto' => '7.png',
                'kelas' => 'X TJAT 1',
            ],
            [
                'nama_anggota' => 'Aisha Ayu Prameswari',
                'foto' => '9.png',
                'kelas' => 'X TJAT 2',
            ],
            [
                'nama_anggota' => 'Naura Intania Farah Jinan',
                'foto' => '8.png',
                'kelas' => 'X TJAT 2',
            ],
            [
                'nama_anggota' => 'Aliyatusshafa Hana Ekasari',
                'foto' => '11.png',
                'kelas' => 'X TJAT 3',
            ],
            [
                'nama_anggota' => 'Aka Lintang Prastama Putra',
                'foto' => '12.png',
                'kelas' => 'X TJAT 3',
            ],
            [
                'nama_anggota' => 'Ava Zabrina Tunggadewi',
                'foto' => '12.png',
                'kelas' => 'X TJAT 4',
            ],
            [
                'nama_anggota' => 'Queisha Aletha',
                'foto' => '13.png',
                'kelas' => 'X TJAT 4',
            ],
            [
                'nama_anggota' => 'Kirani Alika Putri',
                'foto' => '14.png',
                'kelas' => 'X TJAT 5',
            ],
            [
                'nama_anggota' => 'Nesha Hazimah Anjani',
                'foto' => '15.png',
                'kelas' => 'X TJAT 5',
            ],
            [
                'nama_anggota' => 'Marcellina Septia Safira',
                'foto' => '1.2.png',
                'kelas' => 'XI SIJA 1',
            ],
            [
                'nama_anggota' => 'Yosefin Kurniawati Tanto',
                'foto' => '2.2.png',
                'kelas' => 'XI SIJA 1',
            ],
            [
                'nama_anggota' => 'Revano Satya',
                'foto' => '3.2.png',
                'kelas' => 'XI SIJA 2',
            ],
            [
                'nama_anggota' => 'Zafif Haidar I.',
                'foto' => '4.2.png',
                'kelas' => 'XI SIJA 2',
            ],
            [
                'nama_anggota' => 'Nadine Aulia P.',
                'foto' => '5.2.png',
                'kelas' => 'XI TJAT 1',
            ],
            [
                'nama_anggota' => 'Nezha Putri Syahbila',
                'foto' => '6.2.png',
                'kelas' => 'XI TJAT 2',
            ],
            [
                'nama_anggota' => 'Atthaya Rasya Arianto',
                'foto' => '7.2.png',
                'kelas' => 'XI TJAT 2',
            ],
            [
                'nama_anggota' => 'Devi Nabila Riyanti',
                'foto' => '8.2.png',
                'kelas' => 'XI TJAT 3',
            ],
            [
                'nama_anggota' => 'Elsa Puspita Kumala',
                'foto' => '9.2.png',
                'kelas' => 'XI TJAT 3',
            ],
            [
                'nama_anggota' => 'Kirana Krisna Dewi',
                'foto' => '10.2.png',
                'kelas' => 'XI TJAT 3',
            ],
            [
                'nama_anggota' => 'Fahrezy Ahmad Ghifari',
                'foto' => '11.2.png',
                'kelas' => 'XI TJAT 3',
            ],
            [
                'nama_anggota' => 'Chico Alfaro Jonathan Setiawan',
                'foto' => '12.2.png',
                'kelas' => 'XI TJAT 3',
            ],
            [
                'nama_anggota' => 'Deviara Putri Aulia Bakti',
                'foto' => '13.2.png',
                'kelas' => 'XI TJAT 4',
            ],
            [
                'nama_anggota' => 'Achmad Nabron Zaen Aska',
                'foto' => '14.2.png',
                'kelas' => 'XI TJAT 4',
            ],
            [
                'nama_anggota' => 'Glory Geo S.',
                'foto' => '15.2.png',
                'kelas' => 'XI TJAT 5',
            ],
            [
                'nama_anggota' => 'Haikal Tyo',
                'foto' => '16.2.png',
                'kelas' => 'XI TJAT 6',
            ],
        ];

        foreach ($mpks as $mpk) {
            Mpks::create($mpk);
        }
    }
}
