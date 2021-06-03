<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'name' => 'Pepe',
            'username' => 'Waka',
            'password' => Hash::make('password'),
            'email' => 'email@email.com',
            'type' => '1',
            'address' => 'El tinte 2',
            'cp' => 41710,
            'age' => 25,
            'location' => 'Utrera',
            'country' => 'Spain',
            'iconousado' => '1',
            'bannerusado' => '1',
            'bio' => 'Tu bio va a aqui',
            'games' => '1,2',
            'preferences' => 'DnD',
        ]);
        DB::table('usuarios')->insert([
            'name' => 'Freecs',
            'username' => 'Gon',
            'password' => Hash::make('password'),
            'email' => 'email@email.com',
            'type' => '1',
            'address' => 'Isla Ballena 5',
            'cp' => 45985,
            'age' => 14,
            'location' => 'Isla Ballena',
            'country' => 'Yorbian',
            'iconousado' => '1',
            'bannerusado' => '1',
            'bio' => 'Tu bio va a aqui',
            'games' => '',
            'preferences' => 'Anima',
        ]);
        DB::table('usuarios')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'email@email.com',
            'type' => '0',
            'address' => 'La casa del admin',
            'cp' => 41710,
            'age' => 30,
            'location' => 'Utrera',
            'country' => 'Spain',
            'iconousado' => '1',
            'bannerusado' => '1',
            'bio' => 'El admin',
            'games' => '5',
            'preferences' => 'DnD',
        ]);
    }
}
