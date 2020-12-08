<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posts::create([
            'title' => 'Pengertian Surat',
            'content' => 'Surat adalah sarana komunikasi untuk menyampaikan informasi tertulis oleh suatu pihak kepada pihak lain dengan tujuan memberitahukan maksud pesan dari si pengirim. Fungsinya mencakup lima hal: sarana pemberitahuan, permintaan, buah pikiran, dan gagasan; alat bukti tertulis; alat pengingat; bukti historis; dan pedoman kerja. Pada umumnya, dibutuhkan prangko dan amplop sebagai alat ganti bayar jasa pengiriman. Semakin jauh tujuan pengiriman surat maka nilai yang tercantum di prangko harus semakin besar juga.
Pada awalnya, surat berisikan dokumen-dokumen pemerintah yang biasa dikirimkan dari satu tempat ke tempat lain dengan kuda ataupun kereta kuda. Sistem pengiriman pos di dunia dimulai di Mesir sekitar tahun 2000 SM. Di Mesir, di mana pertukaran kebudayaan dengan Babilonia terjadi, pembungkus surat atau amplop bisa berupa kain, kulit binatang, atau beberapa bagian sayuran. Mereka juga membungkus pesan mereka menggunakan lapisan tipis dari tanah liat yang dibakar. Sedangkan kekaisaran Persia di bawah kekuasaan Cyrus sekitar tahun 600 SM menggunakan sistem pengiriman pesan yang terintegrasi.[1] Pengendara kuda (Chapar) akan berhenti di titik-titik pos tertentu (Chapar-Khaneh). Di sini, pengendara kuda akan mengganti kudanya dengan yang baru untuk mendapatkan kecepatan maksimum dalam pengiriman pesan. Sistem ini disebut dengan angariae'
        ]);
        Posts::create([
            'title' => 'Pengertian Industri 4.0',
            'content' => 'Industri 4.0 adalah nama tren otomasi dan pertukaran data terkini dalam teknologi pabrik. Istilah ini mencakup sistem siber-fisik, internet untuk segala, komputasi awan, dan komputasi kognitif.

Industri 4.0 menghasilkan "pabrik cerdas". Di dalam pabrik cerdas berstruktur moduler, sistem siber-fisik mengawasi proses fisik, menciptakan salinan dunia fisik secara virtual, dan membuat keputusan yang tidak terpusat. Lewat Internet untuk segala (IoT), sistem siber-fisik berkomunikasi dan bekerja sama dengan satu sama lain dan manusia secara bersamaan. Lewat komputasi awan, layanan internal dan lintas organisasi disediakan dan dimanfaatkan oleh berbagai pihak di dalam rantai nilai.'
        ]);
    }
}