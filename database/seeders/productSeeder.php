<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'name' => 'Figura Warhamer',
            'description' => 'Figura WarHammer pintada manualmente y original de la caja',
            'cost' => 20,
            'stock' => 10,
            'dealer' => 'WarHammer',
            'image' => 'https://cloud10.todocoleccion.online/juegos-antiguos-warhammer/tc/2016/12/21/12/70002105.jpg',
            'tags' => 'figuras'

        ]);
        DB::table('productos')->insert([
            'name' => 'Manual Anima',
            'description' => 'Manual de Anima en el que puedes vivir tu aventura',
            'cost' => 40,
            'stock' => 30,
            'dealer' => 'Anima',
            'image' => 'https://rolcondados.com/imagenes/juegos/ediciones/x320/anima-beyond-fantasy-core-exxet.png',
            'tags' => 'manuales'

        ]);
        DB::table('productos')->insert([
            'name' => 'Dados Del señor Demonio',
            'description' => 'Dados de alta calidad inspirados en un diseño demoniaco',
            'cost' => 15,
            'stock' => 80,
            'dealer' => 'Dice Adventure',
            'image' => 'http://drive.google.com/uc?export=view&id=1NaN365sAsFhSWWdH9jn3AU-Oab1SypL1',
            'tags' => 'dados'

        ]);
        DB::table('productos')->insert([
            'name' => 'Mapas D&D',
            'description' => '¡Dale vida a tus aventuras con estas baldosetas de mazmorra en color! Estas baldosas, ampliables hasta el infinito y fáciles de usar, te permiten personalizar tu aventura. Con las 3 ediciones disponibles, satisfarán todas las necesidades del Game Master.
            Crea fantásticos conjuntos: contiene 16 baldosas ilustradas a doble cara duraderas.',
            'cost' => 25,
            'stock' => 40,
            'dealer' => 'Wizards of the Coast',
            'image' => 'http://drive.google.com/uc?export=view&id=1NQZuFlSPMSWXSHBhNTeIZ4pEqPQkK5rx',
            'tags' => 'mapas'
        ]);
    }
}
