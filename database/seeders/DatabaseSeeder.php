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
            'email' => 'sdnegerikauman@gmail.com',
            'alamat' => 'Jl. Bimoseno, Kidal, Kauman, Kec. Karangrejo, Kabupaten Magetan, Jawa Timur 63395',
            'hp' => '0812334569',
            // 'fax' => '2133 - 213213',
        ]);
        Headline::create([
            'title' => 'NEW ADVENTURE',
            'image' => 'images/slider1.jpg',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore consectetur, perspiciatis modi ea in laborum quod vitae quasi maxime excepturi.',
        ]);
        Headline::create([
            'title' => 'NEW TRIP',
            'image' => 'images/slider2.jpg',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore consectetur, perspiciatis modi ea in laborum quod vitae quasi maxime excepturi.',
        ]);
        Headline::create([
            'title' => 'NEW EXPERIENCE',
            'image' => 'images/slider3.jpg',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore consectetur, perspiciatis modi ea in laborum quod vitae quasi maxime excepturi.',
        ]);
        // FASILITAS
        Facility::create([
            'title' => 'Mountain Hiking',
            'image' => 'images/camping-1.jpg',
            'body' => 'Embark on an exhilarating hiking adventure in the breathtaking mountain ranges.',
        ]);
        Facility::create([
            'title' => 'Lakeside Camping',
            'image' => 'images/camping-2.jpg',
            'body' => 'Embark on an exhilarating hiking adventure in the breathtaking mountain ranges.',
        ]);
        Facility::create([
            'title' => 'Beach Camping',
            'image' => 'images/camping-3.jpg',
            'body' => 'Escape to sandy beaches and camp under the starry sky by the crashing waves.',
        ]);
        Facility::create([
            'title' => 'Forest Exploration',
            'image' => 'images/camping-4.jpg',
            'body' => 'Discover the wonders of lush forests and immerse yourself in natures beauty.',
        ]);
        Facility::create([
            'title' => 'RV Camping',
            'image' => 'images/camping-5.jpg',
            'body' => 'Experience the freedom of road trips and camping adventures with our RV rentals.',
        ]);
        Facility::create([
            'title' => 'Desert Camping',
            'image' => 'images/camping-6.jpg',
            'body' => 'Embark on a unique desert camping experience and witness stunning landscapes.',
        ]);
        Facility::create([
            'title' => 'Desert Camping',
            'image' => 'images/camping-6.jpg',
            'body' => 'Embark on a unique desert camping experience and witness stunning landscapes.',
        ]);
        Gallery::create([
            'image' => 'images/slider1.jpg',
        ]);
        Gallery::create([
            'image' => 'images/slider2.jpg',
        ]);
        Gallery::create([
            'image' => 'images/slider3.jpg',
        ]);
        About::create([
            'title' => 'We Realize that there are reduced Wastege Stand out',
            'image' => 'images/about-img.jpg',
            'video' => 'https://www.youtube.com/watch?v=tMRqNOO3k94',
            'body' => 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.',
        ]);
        

    }
}
