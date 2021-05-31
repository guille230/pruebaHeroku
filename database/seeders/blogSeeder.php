<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'image' => 'https://nacionrolera.org/wp-content/uploads/2017/08/iniciacion-top.jpg',
            'headline' => 'Juegos de Rol que no son de rol',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aperiam consequatur beatae. Nam molestias doloribus voluptatibus nemo at, quibusdam officiis consequatur, nulla tempora, debitis ipsa. Beatae expedita quae earum similique!', 
            'tags' => 'blog,juegos'
        ]);

        DB::table('blogs')->insert([
            'image' => 'http://4.bp.blogspot.com/-oiAdKiSruGc/VdXpB_HwSGI/AAAAAAAABPA/P20nkkQtvwQ/s1600/tumblr_mr6ce6iAXa1r10jkco1_500.jpg',
            'headline' => 'Referencias a juegos de rol en animacion',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aperiam consequatur beatae. Nam molestias doloribus voluptatibus nemo at, quibusdam officiis consequatur, nulla tempora, debitis ipsa. Beatae expedita quae earum similique!', 
            'tags' => 'blog,animacion'
        ]);

        DB::table('blogs')->insert([
            'image' => 'https://diario.madrid.es/latina/wp-content/uploads/sites/19/2017/09/JUEGO-ROL-TABLERO-1000x750.jpg',
            'headline' => 'Rol fÃ­sico VS Rol On Line',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aperiam consequatur beatae. Nam molestias doloribus voluptatibus nemo at, quibusdam officiis consequatur, nulla tempora, debitis ipsa. Beatae expedita quae earum similique!', 
            'tags' => 'blog'
        ]);

        DB::table('blogs')->insert([
            'image' => 'https://lh3.googleusercontent.com/proxy/6E_8fr3Q6cec1HP29Ci2DXjyCgiX5I-zntz9mhZQNQKk9KWxrGxRXDmGSetogdXcdtclinMK7sgX3iU8HqwzplYLF7to8LbiD5Hk5PAq3eJx_hdslJ9NAtF4DrFv4wpPNArjhY3Vuztgx-qbuTQgk2SAUCxfVNF7tUAR-B3Hc5heC9D_',
            'headline' => 'El rol y las relaciones sociales',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aperiam consequatur beatae. Nam molestias doloribus voluptatibus nemo at, quibusdam officiis consequatur, nulla tempora, debitis ipsa. Beatae expedita quae earum similique!', 
            'tags' => 'blog'
        ]);

        DB::table('blogs')->insert([
            'image' => 'http://www.dragonesymazmorras.org/wp-content/uploads/Visi%C3%B3n-MEC-Juegos-de-Rol-4c-.jpg',
            'headline' => 'Como el rol es bueno para tu cerebro',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aperiam consequatur beatae. Nam molestias doloribus voluptatibus nemo at, quibusdam officiis consequatur, nulla tempora, debitis ipsa. Beatae expedita quae earum similique!', 
            'tags' => 'blog'
        ]);
    }
}
