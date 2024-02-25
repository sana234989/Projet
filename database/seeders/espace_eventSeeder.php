<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\espace_event;
use App\Models\espaceevenet;
class espace_eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $espace_events=[
           ["name" => "esthétique",
            "capacite" => 900,
            "prix" => 800,
            "statut" => "disponible",
            "description" => "Les espaces sont conçus pour favoriser\n linnovation,\n offrant une atmosphère professionnelle propice à l échange d idées et à la collaboration. Équipées de\n technologies modernes",
            "image1"=>"images/v122_22.png",
              "image2"=>"images/v122_30.png",
                "image3"=>"images/v122_21.png"],
                ["name" => "Élégance Exotique",
            "capacite" => 400,
            "prix" => 600,
            "statut" => "disponible",
            "description" => "Explorez lenchantement de nos espaces de mariage à lhôtel marocain, où lopulence traditionnelle rencontre le raffinement moderne.",
            "image1"=>"images/v122_9.png",
              "image2"=>"images/v122_7.png",
                "image3"=>"images/v122_6.png"]

        ];
        foreach ($espace_events as $menu) {
            espaceevenet::create($menu);
        }
    }
}
