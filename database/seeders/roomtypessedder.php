<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roomtypessedder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
    public function run(): void
    {
       $roomtypess=[
        [
            'type'=> 'Single room',
            'description'=>"cette chambre offre un espace bien agencé et lumineux<br> où chaque détail est soigneusement pensé pour assurer<br> votre confort et votre détente. Profitez d'un séjour paisible <br> et revitalisant dans notre chambre individuelle",
             'detail'=>"<ul><li>50 m2</li><li>02</li><li>01</li><li>View/city</li></ul>",
             'capacity'=> 1,
             'nb_chambre'=> 30,
             'prix'=> '375 dh',
             'image'=>'image/single room.jpg',
        ],
        [
            'type'=> 'Double room',
            'description'=>"La chambre double est un refuge accueillant conçu pour offrir confort et intimité aux voyageurs en couple ou aux amis proches. Avec son ambiance chaleureuse et ses équipements modernes",
             'detail'=>"<ul><li>89 m2</li><li>02</li><li>01</li><li>View/city</li></ul>",
             'capacity'=> 2,
             'nb_chambre'=> 35,
             'prix'=> '600 dh',
             'image'=>'image/double.jpg', 
       ] ,
       [
        'type'=> 'Deluxe Room',
        'description'=>"La chambre Deluxe est l'incarnation du luxe offrant à ses<br> occupants une expérience d'hébergement inégalée Conçue<br> avec soin pour répondre aux besoins les plus exigeants",
         'detail'=>"<ul><li>100 m2</li><li>02</li><li>01</li><li>View/city</li></ul>",
         'capacity'=> 2,
         'nb_chambre'=> 25,
         'prix'=> '1000 dh',
         'image'=>'image/delux room.jpg'
       ],
       [
        'type'=> 'Royal Room',
        'description'=>"La Royal Room incarne le summum de l'élégance et du luxe. Avec ses espaces généreux et ses équipements haut de gamme,cette chambre offre une expérience d'hébergement véritablement royale. Plongez dans un monde de confort absolu et de sophistication",
         'detail'=>"<ul><li>100 m2</li><li>02</li><li>01</li><li>View/city</li></ul>",
         'capacity'=> 2,
         'nb_chambre'=> 20,
         'prix'=> '1600 dh',
         'image'=>'image/royal2.jpg'
       ],
       [
        'type'=> 'Family Room',
        'description'=>"La Family Room est l'option idéale pour les familles<br>en quête d'un espace confortable et accueillant. Spacieuse et bien aménagée,<br> cette chambre offre tout ce dont vous avez besoin <br>pour un séjour relaxant en famillial",
         'detail'=>"<ul><li>100 m2</li><li>02</li><li>01</li><li>View/city</li></ul>",
         'capacity'=> 6,
         'nb_chambre'=> 45,
         'prix'=> '1700 dh',
         'image'=>'image/family.jpg'
       ],
       [
        'type'=> 'Privilege Room',
        'description'=>"La Privilege Room offre une expérience d'hébergement haut de gamme conçue pour répondre aux besoins des voyageurs les plus exigeants. Cette chambre élégante et sophistiquée est aménagée avec un souci du détail et un luxe raffiné.",
         'detail'=>"<ul><li>100 m2</li><li>02</li><li>01</li><li>View/city</li></ul>",
         'capacity'=> 4,
         'nb_chambre'=> 40,
         'prix'=> '1000 dh',
         'image'=>'image/provilege.jpg'
       ]
       ];
       DB::table('roomtypesses')->insert($roomtypess);
}
}
