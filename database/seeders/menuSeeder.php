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
                "name" => "soup",
                "prix" => 40.5,
                "url" => "espangol_menu/v69_143.png",
                "idresturant" => 2,
            ],
            [
                "name" => "pancakes",
                "prix" => 40.5,
                "url" => "espangol_menu/v69_147.png",
                "idresturant" => 2,
            ]
        ];

        // Utiliser le modèle RestaurantMenu pour insérer les données
        foreach ($menus as $menu) {
            restaurant_menu::create($menu);
        }
    }
}
