<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class personelseeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
        $personnel=[
            [
                'nom'=> 'Boussag',
                'prenom'=> 'Mariame',
                'email'=> 'Mariameboussag@gmail.com',
                'num_telephone'=> '07.54.12.33.78',
                'CIN'=> 'tr123502',
                'fonction'=> 'Chef de restaurant',
                 'descripost'=>"Boussag Mariame apporte sa passion pour la cuisine et son expertise culinaire pour créer des expériences gastronomiques mémorables. Son talent créatif et son attention aux détails se reflètent dans chaque plat qu'il prépare, offrant aux clients une expérience culinaire inoubliable.",
                 'img'=>'image\chef_restaurant.jpg',
                 'date_embauche'=> '2017-02-12',
            ],
            [
                'nom'=> 'Fahdi',
                'prenom'=> 'Anas',
                'email'=> 'FahdiAnas@gmail.com',
                'num_telephone'=> '06.62.33.65.09',
                'CIN'=> 'JT113054',
                'fonction'=> 'Chef des chambres',
                'descripost'=>"Fahdi Anas supervise le service des chambres, veillant à ce que chaque espace soit impeccable et accueillant pour les clients. Son attention aux détails et son sens de l'organisation garantissent un séjour confortable et agréable pour tous les clients de l'hôtel.",
                'img'=>'image\chefchambre.jpg',
                'date_embauche'=> '2017-03-20'
            ],
            [
                'nom'=> 'Elmsrar',
                'prenom'=> 'Amal',
                'email'=> 'Amalelmsrar@gmail.com',
                'num_telephone'=> '06.62.55.89.99',
                'CIN'=> 'JT199321',
                'fonction'=> 'Chef espace evenement',
                'descripost'=>" Elmsrar Amal orchestre des événements exceptionnels, alliant créativité et organisation pour offrir des expériences uniques. Sa passion pour la conception d'espaces et son souci du détail garantissent que chaque événement est mémorable et parfaitement exécuté.",
                'img'=>'image\chef_espace.jpg',
                'date_embauche'=> '2018-03-22'
            ],
            [
                'nom'=> 'Salami',
                'prenom'=> 'Soufiane',
                'email'=> 'Soufianesalami@gmail.com',
                'num_telephone'=> '07.05.55.89.09',
                'CIN'=> 'JT199321',
                'fonction'=> 'Chef de service',
                'descripost'=>"Salami Soufiane supervise avec élégance et efficacité tous les aspects du service clientèle de notre hôtel. Son attention aux détails et son engagement envers l'excellence garantissent une expérience client exceptionnelle à chaque visite.",
                'img'=>'image\chef_servi.jpg',
                'date_embauche'=> '2018-05-10'
            ],
            ];
        
                DB::table('employes')->insert($personnel);
            }
    }

