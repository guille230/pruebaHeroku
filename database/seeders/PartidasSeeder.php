<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PartidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::now();
        $today = $today->toDateString();
        $antiguo = Carbon::now()->subWeek();
        $antiguo = $antiguo->toDateString();
        DB::table('partidas')->insert([
            'nombre' => 'La ira de Ifrit',
            'creator' => '1',
            'max' => 5,
            'system' => 'DnD',
            'type' => '0',
            'duration' => 4,
            'creationdate' => $today,
            'description' => 'Ifrit es el primer jefe de Final Fantasy VIII se encuentra en el fondo de la Caverna de las Llamas. Se lucha contra el, como parte del examen para ser Seed, después de derrotarlo se unirá al grupo como un Guardian Force, (Guardián de la Fuerza - G.F.).',
            'tags' => 'DnD'
        ]);
        DB::table('partidas')->insert([
            'nombre' => 'Los mas locos de Utrera',
            'creator' => '2',
            'max' => 3,
            'system' => 'Anima',
            'type' => '0',
            'duration' => 4,
            'creationdate' => $today,
            'description' => 'UTRERA LOCOS UTRERA LOCOS UTRERA LOCOS UTRERA LOCOS',
            'tags' => 'Anima'
        ]);
        DB::table('partidas')->insert([
            'nombre' => 'La invasion de las Hormiga-Quimera',
            'creator' => '2',
            'max' => 10,
            'system' => 'Anima',
            'type' => '1',
            'duration' => 1,
            'creationdate' => $antiguo,
            'description' => 'Después de la caza de más seres humanos, las hormigas quimera acceden a una formación rocosa más hacia el interior, y las poblaciones de hormigas quimera crecen más rápido que nunca. Esta infestación llama la atención de Pokkle, un cazador de bestias.',
            'tags' => 'Anima'
        ]);
        DB::table('partidas')->insert([
            'nombre' => 'El Coliseo del Cielo',
            'creator' => '1',
            'max' => 2,
            'system' => 'BurnBryte',
            'type' => '3',
            'duration' => 10,
            'creationdate' => $today,
            'description' => 'El Coliseo del Cielo es el lugar de batallas más popular del mundo. Se encuentra en el mismo continente que la República de Padokia, residencia de la Familia Zoldyck, pero se encuentra en el sector oriental del continente, lo que sería el sur de África.',
            'tags' => 'BurnBryte'
        ]);
    }
}
