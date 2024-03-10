<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class spaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
       $spa=[
        [
            'nom_service'=> 'HAMMAM',
            'image_service'=> 'image/hammam1.jpg'
        ],
        [
            'nom_service'=> 'SOINS CORPS',
            'image_service'=> 'soin1.jpg'
        ],
        [
            'nom_service'=> 'SOINS DU VISAGE',
            'image_service'=> 'image/voisine5.jpg'
        ]

       ];
       DB::table('spas')->insert($spa);
    }
}
