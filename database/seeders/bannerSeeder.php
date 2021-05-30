<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'bannerImage' => 'https://miro.medium.com/max/3840/1*EOCQfnhc84knJssqDlXLEA.jpeg'
        ]);

        DB::table('banners')->insert([
            'bannerImage' => 'https://royaldestinyblog.files.wordpress.com/2018/09/dnd-banner.jpg?w=700'
        ]);

        DB::table('banners')->insert([
            'bannerImage' => 'https://media.dnd.wizards.com/styles/news_banner_header/public/images/head-banner/bg-heroes_0.jpg'
        ]);
        DB::table('banners')->insert([
            'bannerImage' => 'https://www.lavanguardia.com/files/image_948_465/uploads/2018/12/06/5fa44ab997050.jpeg'
        ]);
        DB::table('banners')->insert([
            'bannerImage' => 'https://media.redadn.es/imagenes/super-smash-bros-ultimate-nintendo-switch_328266.jpg'
        ]);
    }
}
