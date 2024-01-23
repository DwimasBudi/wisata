<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\About;
use App\Models\Kontak;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Facility;
use App\Models\Headline;
use App\Models\Fasilitas;
use App\Models\FasilitasWisata;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Dwimas Budi Sulistyo',
            'username' => 'dwimasbudi',
            // 'email' => 'dwimasbudi@gmail.com',
            'password' => bcrypt('password')
        ]);
     
        Kontak::create([
            'email' => 'sidorejo@gmail.com',
            'alamat' => 'Karanggupito, Kec. Kendal, Kabupaten Ngawi, Jawa Timur 63262',
            'hp' => '0823-2765-8291',
            'jam' => 'Monday - Friday: 9:00 AM - 5:00 PM',
        ]);
        Headline::create([
            'title' => 'NEW ADVENTURE',
            'image' => 'images/slider1.jpg',
            'body' => '<p>Menandakan permulaan petualangan yang baru, setiap perjalanan adalah kesempatan untuk menjelajahi dunia dan menemukan tempat-tempat baru yang menakjubkan.</p>',
        ]);
        Headline::create([
            'title' => 'NEW TRIP',
            'image' => 'images/slider2.jpg',
            'body' => '<p>Setiap perjalanan membawa pengalaman petualangan yang tak terduga, memicu kegembiraan dan keingintahuan untuk mengatasi tantangan yang baru dan mendebarkan.</p>',
        ]);
        Headline::create([
            'title' => 'NEW EXPERIENCE',
            'image' => 'images/slider3.jpg',
            'body' => '<p>Setiap detik perjalanan menciptakan pengalaman baru yang membentuk kenangan tak terlupakan. Rasakan keunikan setiap momen dan nikmati sensasi pengalaman yang belum pernah Anda rasakan sebelumnya.</p>',
        ]);
        // FASILITAS
        Facility::create([
            'nama' => 'Kolam Renang Anak',
            'image' => 'images/kolam-anak.jpg',
            'body' => '<p>Kolam renang anak-anak yang aman dan bersih, menciptakan pengalaman berenang yang menyenangkan untuk keluarga.</p>',
        ]);
        Facility::create([
            'nama' => 'Kolam Renang Dewasa',
            'image' => 'images/kolam-dewasa.jpg',
            'body' => '<p>Berenang dalam kesejukan kolam renang yang jernih, menciptakan pengalaman santai dan menyegarkan.</p>',
        ]);
        Facility::create([
            'nama' => 'Kolam Ikan',
            'image' => 'images/kolam-ikan.jpg',
            'body' => '<p>Santai di sekitar kolam ikan kami, menikmati pemandangan damai ikan-ikan yang berenang.</p>',
        ]);
        Facility::create([
            'nama' => 'Tempat Ibadah',
            'image' => 'images/sholat.jpg',
            'body' => '<p>Tempat ibadah kami yang sakral memberikan ruang untuk merenung dan berdoa dalam ketenangan.</p>',
        ]);
        Facility::create([
            'nama' => 'Warung Makan',
            'image' => 'images/warung.jpg',
            'body' => '<p>Nikmati kuliner lokal autentik di warung kami dengan cita rasa khas daerah. Selamat menikmati makanan lezat!</p>',
        ]);
        Facility::create([
            'nama' => 'Pendopo',
            'image' => 'images/pendopo.jpg',
            'body' => '<p>Tempat berkumpul tradisional, Pendopo, memberikan nuansa hangat untuk pertemuan keluarga atau rapat bisnis.</p>',
        ]);
        Facility::create([
            'nama' => 'gazebo',
            'image' => 'images/gazebo.jpg',
            'body' => '<p>Nikmati momen spesial di Gazebo tradisional kami, tempat ideal untuk berkumpul dan bersantai di alam terbuka.</p>',
        ]);
        Gallery::create([
            'image' => 'images/kolam-anak.jpg',
        ]);
        Gallery::create([
            'image' => 'images/kolam-dewasa.jpg',
        ]);
        Gallery::create([
            'image' => 'images/pendopo.jpg',
        ]);
        Gallery::create([
            'image' => 'images/sholat.jpg',
        ]);
        About::create([
            'title' => 'Selamat datang di Bumi Perkemahan Gendingan!',
            'image' => 'images/pendopo.jpg',
            'video' => 'https://www.youtube.com/watch?v=tMRqNOO3k94',
            'body' => '<p>Salam hangat untuk semua pengunjung. Kami sangat senang bisa menjadi bagian dari petualangan dan kebahagiaan Anda di sini. Bumi Perkemahan Gendingan menawarkan lebih dari sekadar liburan biasa. Di tengah alam yang masih asli, Anda akan menemukan keindahan yang memukau dan ketenangan yang mendalam.</p>
<p>Nikmati kegiatan berkemah di bawah langit bintang, jelajahi trek-trek menakjubkan, dan rasakan keharmonisan dengan alam. Tim kami berkomitmen untuk memberikan pengalaman terbaik untuk Anda dan keluarga. Kami juga mengundang Anda untuk menjaga kelestarian alam bersama-sama.</p>
<p>Terima kasih telah memilih Bumi Perkemahan Gendingan sebagai destinasi liburan Anda. Semoga setiap momen di sini memberikan kenangan yang tak terlupakan. Selamat menikmati petualangan yang menanti!</p>',
        ]);
        

    }
}
