<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoomType;
use Illuminate\Support\Facades\DB;

class roomtypeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
    public function run(): void
    {
        
        $rooms=[
           ['type'=>"single room",
           'description'=>"<ul><li>2balcon</li><li>1 bed</li><li>wifi</li><li>1 large wc</li></ul>",
           'capacity'=>1,
           'nb chambre'=> 30,
           'prix'=> '390dh',
        ],
        ['type'=>"double room",
        'description'=>"<ul><li>2balcon</li><li>2 bed</li><li>wifi</li><li>2 large wc</li></ul>",
        'capacity'=>2,
        'nb chambre'=>40,
        'prix'=> '500dh',
     ],
     ['type'=>"Deluxe Room",
     'description'=>"<ul><li>3balcon</li><li>3 bed</li><li>wifi</li><li> 2 large wc</li></ul>",
     'capacity'=>4,
     'nb chambre'=> 35,
     'prix'=> '700dh',
  ],
  ['type'=>"royal Room",
  'description'=>"<ul><li>3balcon</li><li>1 bed large</li><li>wifi</li><li> 3 large wc</li></ul>",
  'capacity'=>2,
  'nb chambre'=> 35,
  'prix'=> '1400dh',
],
['type'=>"family Room",
'description'=>"<ul><li>3balcon</li><li>4 bed</li><li>wifi</li><li> 2 large wc</li></ul>",
'capacity'=>6,
'nb chambre'=>35,
'prix'=> '900dh',
],
['type'=>"Privilege Room",
'description'=>"<ul><li>3balcon</li><li>4 bed</li><li>wifi</li><li> 2 large wc</li></ul>",
'capacity'=>3,
'nb chambre'=>35,
'prix'=> '880dh',
],
  
];
DB::table('roomstypes')->insert($rooms);
    
    }
}

