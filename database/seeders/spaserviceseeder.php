<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class spaserviceseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spadetaill=[
            [
                'idservice'=> 1,
                'sous_service'=> 'Bain hydromassant',
                'prix'=> '250dh',
                'time'=> '30 min',
            ],
            [
                'idservice'=> 1,
                'sous_service'=> 'Gommage en cabine',
                'prix'=> '250dh',
                'time'=> '30 min',  
            ],
            [
                'idservice'=> 1,
                'sous_service'=> 'Douche sous affusion',
                'prix'=>'300dh',
                'time'=>'30min'
            ],

        [
            'idservice'=> 2,
            'sous_service'=> 'Massage Relaxant',
            'prix'=> '250 dh',
            'time'=> '35 min',  
        ],
        [
            'idservice'=> 2,
            'sous_service'=> 'Enveloppement Corporel',
            'prix'=> '350 dh',
            'time'=> '75 min', 
        ],
        [
            'idservice'=> 2,
            'sous_service'=> 'Gommage corporel',
            'prix'=> '250 dh',
            'time'=> '45 min', 
        ],
        [
            'idservice'=> 3,
            'sous_service'=> "l'Huile d'Argan",
            'prix'=> '350 dh',
            'time'=> '60 min', 
        ],
        [
            'idservice'=> 3,
            'sous_service'=> "Masque au Rhassoul",
            'prix'=> '300 dh',
            'time'=> '45 min', 
        ],
        [
            'idservice'=> 3,
            'sous_service'=> "l'Huile d'Amande Douce",
            'prix'=> '200 dh',
            'time'=> '30 min', 
        ]
        ];
        DB::table('spaservices')->insert($spadetaill);
    }
}
    

