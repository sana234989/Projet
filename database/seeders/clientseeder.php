<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class clientseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'zineb',
                'prenom' => 'talmati',
                'email' => 'zinebtalmati@gmail.com',
                'telephone' => '0708652341',
                'genre' => 'f',
                'nationalite' => 'marocain',
                'datenaissance' => '2004-07-30' 
            ]
        ];
    
        foreach ($clients as $clientData) {
            // Valider les données
            $validator = Validator::make($clientData, [
                'name' => 'required|string|max:50',
                'prenom' => 'required|string|max:50',
                'email' => 'required|email|max:50',
                'telephone' => 'required|string|max:50',
                'genre' => 'required|string|max:50',
                'nationalite' => 'required|string|max:50',
                'datenaissance' => 'required|date_format:Y-m-d',
            ]);
    
            if ($validator->fails()) {
                // Si la validation échoue, affichez les messages d'erreur
                foreach ($validator->errors()->all() as $error) {
                    echo $error . "\n";
                }
                continue; // Passer à l'itération suivante si les données ne sont pas valides
            }
    
            DB::table('clients')->insert($clientData);
        }
    }
}

    
