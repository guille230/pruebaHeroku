<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class iconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iconos')->insert([
            'iconImage' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/SmashBall.svg/1200px-SmashBall.svg.png'
        ]);
        DB::table('iconos')->insert([
            'iconImage' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/ness.png'
        ]);
        DB::table('iconos')->insert([
            'iconImage' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/pokemon_trainer.png'
        ]);
        DB::table('iconos')->insert([
            'iconImage' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/bowser.png'
        ]);
        DB::table('iconos')->insert([
            'iconImage' => 'https://www.smashbros.com/assets_v2/img/fighter/pict/king_dedede.png'
        ]);
    }
}
