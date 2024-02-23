<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class personnelseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personnel=[
            [
                'nom'=> 'anil',
                'prenom'=> 'talmati',
                'email'=> 'aniltalmtai@gmail.com',
                'num_telephone'=> '0754123378',
                'CIN'=> 'tr1235',
                'fonction'=> 'resp de reservation',
                'date_embauche'=> '2024-01-12',
            ]
            ];
            foreach ($personnel as $employe) {
                $validator = Validator::make($employe, [
                    'nom' => 'required|string|max:50',
                    'prenom' => 'required|string|max:50',
                    'email' => 'required|email|max:50',
                    'num_telephone' => 'required|string|max:50',
                    'CIN' => 'required|string|max:50',
                    'fonction' => 'required|string|max:50',
                    'date_embauche' => 'required|date_format:Y-m-d',
                ]);
        
                if ($validator->fails()) {
                    // Si la validation échoue, affichez les messages d'erreur
                    foreach ($validator->errors()->all() as $error) {
                        echo $error . "\n";
                    }
                    continue; // Passer à l'itération suivante si les données ne sont pas valides
                }
        
                DB::table('personnels')->insert($employe);
            }
        }
    }
