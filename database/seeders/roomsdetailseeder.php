<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roomsdetailseeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
        $roomdetail=[
            [
            'rommtype_id'=> 1,
            'status'=> 'available',
        ]
    ];

    DB::table('rommsdetails')->insert( $roomdetail);

    }
}