<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class reservchambreseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reservchambre = [
            [
                'idreservation' => 2,
                'idroomtype' => 1,
            ]
        ];
        
        foreach ($reservchambre as $reserv) {
            $validator = Validator::make($reserv, [
                'idreservation' => 'required|integer',
                'idroomtype' => 'required|integer',
            ]);
        
            if ($validator->fails()) {
                // Si la validation échoue, affichez les messages d'erreur
                foreach ($validator->errors()->all() as $error) {
                    echo $error . "\n";
                }
                continue; // Passer à l'itération suivante si les données ne sont pas valides
            }
            DB::table('reservation_chambres')->insert($reserv);
        }
    }
}
        
