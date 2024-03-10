<?php

// namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Validator;

// class clientseeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         $clients = [
//             [
//                 'name' => 'zineb',
//                 'prenom' => 'talmati',
//                 'email' => 'zinebtalmati@gmail.com',
//                 'telephone' => '0708652341',
//                 'genre' => 'f',
//                 'nationalite' => 'marocain',
//                 'datenaissance' => '2004-07-30' 
//             ]
//         ];
    
//         foreach ($clients as $clientData) {
//             // Valider les données
//             $validator = Validator::make($clientData, [
//                 'name' => 'required|string|max:50',
//                 'prenom' => 'required|string|max:50',
//                 'email' => 'required|email|max:50',
//                 'telephone' => 'required|string|max:50',
//                 'genre' => 'required|string|max:50',
//                 'nationalite' => 'required|string|max:50',
//                 'datenaissance' => 'required|date_format:Y-m-d',
//             ]);
    
//             if ($validator->fails()) {
//                 // Si la validation échoue, affichez les messages d'erreur
//                 foreach ($validator->errors()->all() as $error) {
//                     echo $error . "\n";
//                 }
//                 continue; // Passer à l'itération suivante si les données ne sont pas valides
//             }
    
//             DB::table('clients')->insert($clientData);
//         }
//     }
// }

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class clientseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'zineb',
                'prenom' => 'talmati',
                'email' => 'zinebtalmati@gmail.com',
                'telephone' => '0708652341',
                'genre' => 'f',
                'nationalite' => 'marocain',
                'datenaissance' => '2004-07-30',
                'email_verified_at' => now(), // Mettez la date actuelle pour la vérification de l'email
                'password' => Hash::make('12345678'), // Remplacez 'votre_mot_de_passe' par le mot de passe désiré
                'profile_photo_path' => null, // Vous pouvez spécifier un chemin d'image si nécessaire
                'created_at' => now(), // Mettez la date actuelle pour la date de création
                'updated_at' => now(), // Mettez la date actuelle pour la date de mise à jour
            ]
        ];
    
        foreach ($users as $userData) {
            // Valider les données
            $validator = Validator::make($userData, [
                'name' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'telephone' => 'required|string|max:50',
                'genre' => 'required|string|max:50',
                'nationalite' => 'required|string|max:50',
                'datenaissance' => 'required|date_format:Y-m-d',
                'email_verified_at' => 'nullable|date',
                'password' => 'required|string|min:8', // Ajoutez vos règles de validation personnalisées si nécessaire
                'profile_photo_path' => 'nullable|string|max:2048', // Ajoutez vos règles de validation personnalisées si nécessaire
                'created_at' => 'nullable|date',
                'updated_at' => 'nullable|date',
            ]);
    
            if ($validator->fails()) {
                // Si la validation échoue, affichez les messages d'erreur
                foreach ($validator->errors()->all() as $error) {
                    echo $error . "\n";
                }
                continue; // Passer à l'itération suivante si les données ne sont pas valides
            }
    
            DB::table('users')->insert($userData);
        }
    }
}

