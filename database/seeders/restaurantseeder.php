<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class restaurantseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $restaurants=
     [[
        'title'=>"Marocain restaurant",
        'description'=> "Un restaurant marocain offre une expérience culinaire riche et variée, imprégnée des saveurs exotiques et des traditions de la cuisine du Maroc. Les plats sont souvent préparés avec des ingrédients frais et des épices aromatiques.",
        'url'=>'image/marocain2.jpg'
     ],[
        'title'=>"French restaurant",
        'description'=> "  La cuisine française fait référence à divers styles gastronomiques dérivés de la tradition française. Elle a évolué au cours des siècles, suivant ainsi les changements sociaux et politiques du pays.",
        'url'=>'image/frensh.png'
     ], [
        'title'=>"Chinese restaurant",
        'description'=> "Dans les restaurants de style chinois, les tables, habituellement de forme arrondie, sont équipées, d'un large plateau central tournant, très pratique pour atteindre chaque plat. Les sanitaires.",
        'url'=>'image/chinoise.png'
     ],[
        'title'=>"Espagnol restaurant",
        'description'=>"La cuisine espagnol fait référence à divers styles gastronomiques dérivés de la tradition française. Elle a évolué au cours des siècles, suivant ainsi les changements sociaux et politiques du pays",
        'url'=>'image/espagnol.png'
     ]
     ];
     DB::table('resataurants')->insert($restaurants);
    }
}
