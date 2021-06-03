<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuariospartidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios_partidas')->insert([
            'id_usuarios' => 1,
            'id_partidas' => 1,
        ]);
        DB::table('usuarios_partidas')->insert([
            'id_usuarios' => 2,
            'id_partidas' => 2,
        ]);
        DB::table('usuarios_partidas')->insert([
            'id_usuarios' => 1,
            'id_partidas' => 3,
        ]);

    }
}
