<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class testseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table=[
            [
                "name"=> "zineb",
            ]
            ];
            DB::table('testmodels')->insert($table);
    }
}
