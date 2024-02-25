<?php

namespace Database\Seeders;

use App\Models\restaurant_menu;
use Illuminate\Database\Seeder;
use App\Models\RestaurantMenu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                "name" => "Tajin",
                "prix" => 80,
               
                "url" => "images_menu/v63_11.png",
                "idresturant" => 1,
            ],
            [
                "name" => "Bastila",
                "prix" => 90,
               
                "url" => "images_menu/v63_12.png",
                "idresturant" => 1,
            ],
            [
                "name" => "Tajin simple",
                "prix" => 60,
               
                "url" => "images_menu/v63_18.png",
                "idresturant" => 1,
            ],
            [
                "name" => "Tajin",
                "prix" => 40,
                "url" => "images_menu/v63_19.png",
                "idresturant" => 1,
            ],
            
            [
                "name" => "Couscous",
                "prix" => 40,
                "url" => "images_menu/v63_20.png",
                "idresturant" => 1,
            ],
            
            [
                "name" => "plat marocain",
                "prix" => 40,
                "url" => "images_menu/v63_31.png",
                "idresturant" => 1,
            ],
            [
                "name" => "Nodales",
                "prix" => 50.33,
                "url" => "menu_chinose/v77_146.png",
                "idresturant" => 3,
            ],
            [
                "name" => "Rice",
                "prix" => 40,
                "url" => "menu_chinose/v77_155.png",
                "idresturant" => 3,
            ],
            [
                "name" => "Pancakes",
                "prix" => 40,
                "url" => "menu_chinose/v77_148.png",
                "idresturant" => 3,
            ],
            [
                "name" => "Brgir",
                "prix" => 40,
                "url" => "menu_chinose/v77_155.png",
                "idresturant" => 3,
            ],
            
            [
                "name" => "",
                "prix" => 40.4,
                "url" => "espangol_menu/v69_153.png",
                "idresturant" => 4,
            ],
            [
                "name" => "plat simple",
                "prix" => 40,
                "url" => "menu_chinose/v77_156.png",
                "idresturant" => 3,
            ],
            [
                "name" => "pancakes",
                "prix" => 30.5,
                "url" => "espangol_menu/v69_153.png",
                "idresturant" => 4,
            ],
            
            [
                "name" => "coffee",
                "prix" => 30.06,
                "url" => "espangol_menu/v69_140.png",
                "idresturant" => 4,
            ],
            
            [
                "name" => "soup",
                "prix" => 40.5,
                "url" => "espangol_menu/v69_143.png",
                "idresturant" => 4,
            ],
            [
                "name" => "pancakes",
                "prix" => 40.5,
                "url" => "espangol_menu/v69_147.png",
                "idresturant" => 4,
            ]
        ];

        // Utiliser le modèle RestaurantMenu pour insérer les données
        foreach ($menus as $menu) {
            restaurant_menu::create($menu);
        }
    }
}
