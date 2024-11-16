<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paslon;

class PaslonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paslon::create([
            'nama_ketos' => 'Yonavisca Magdalena Putri',
            'nama_waketos' => 'Anggun dinda Christianti',
            'foto' => 'fotopaslon1.jpg',
            'visi' => 'Menjadi osis yang berprestasi, berakhlak, terampil, dan kreatif, menjadikan siswa siswi yang disiplin dan bertanggung jawab dan menjadikan siswa siswi mempunyai minat baca dan menulis yang tinggi, menjadikan siswa dan siswi berpikiran cerdas dan berkarakter.',
            'misi' => 'Meningkatkan prestasi siswa dan siswi di bidang akademik maupun non akademik, meningkatkan integritas osis, menambahkan sifat sopan dan santun serta kepedulian di kalangan siswa dan siswi, mewujudkan siswa dan siswi yang mulia, jujur, dan berkarakter.',
        ]);

        Paslon::create([
            'nama_ketos' => 'Naufal Trisano Setiawan',
            'nama_waketos' => 'Cheryl Naomi Hotnu Maipoung',
            'foto' => 'fotopaslon3.jpg',
            'visi' => 'Menjadikan Masyarakat SMP ABC untuk selalu menerapkan contoh positif dan menjauhi contoh negatif, menjadi wadah tamping minat bakat siswa siswi SMP anak bangsa cerdas untuk menjadi generasi kreatif, cerdas, berakhlak mulia, dan mampu mewujudkan Impian emas.',
            'misi' => 'Menjadikan siswa siswi SMP ABC untuk memiliki rasa tanggung jawab yang tinggi, memajukan siswa siswi SMP ABC untuk lebih kreatif, terampil, dan selalu berkolaborasi, mengunggulkan organisasi osis untuk selalu menjadi panitia terbaik di seluruh acara, mengajak siswa siswi untuk selalu melestarikan kearifan lokal, melatih siswa siswi untuk selalu maju dalam hal akademik maupun non akademik.',
        ]);

        Paslon::create([
            'nama_ketos' => 'Roby Farroz A.A',
            'nama_waketos' => 'Shofyan Idfirul Aziz',
            'foto' => 'fotopaslon2.jpg',
            'visi' => 'Untuk pengalaman dari sekolah',
            'misi' => 'Cara agar anak anak lainnya bisa disiplin.',
        ]);

        Paslon::create([
            'nama_ketos' => 'Abiy Neora Variaco',
            'nama_waketos' => 'Muhammad Zakky Abidin',
            'foto' => 'fotopaslon4.jpg',
            'visi' => 'Mewujudkan Osis sebagai organisasi terpandang di kalangan siswa.',
            'misi' => 'Membentuk karakter siswa menjadi smart, sigap, musyawarah, adil, religious, teliti.',
        ]);
    }
}
