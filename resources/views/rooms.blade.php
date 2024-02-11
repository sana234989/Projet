<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href= "{{ asset('style3.css') }}">
    <title>Document</title>
</head>
<body>
    <body  class="bg-gray-200">
   
        <div class="card flex justify-center items-center h-auto">
            {{--ici on a le div qui genere tout les cards--}}
            <div class="rooms grid grid-cols-2 gap-4">
                <h4 class="title">Welcome to our rooms </h4>
                <p class="text"> 
             
Bienvenue à notre hôtel ! Nous sommes ravis de vous accueillir dans notre établissement <br>où vous découvrirez un monde de confort et d'élégance. Explorez nos chambres exceptionnelles conçues pour offrir une expérience de séjour inoubliable. </p>
                 {{-- ici le div de 1 ere card--}}    
              <div class="room1 max-w-sm rounded overflow-hidden shadow-lg" id="card1">
                <img class="r1 w-full" src="{{ asset('image/single room.jpg') }}" alt="Image 1"id="r1">
                <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2"><h3 id="titre1">Single Room</h3></div>
                  <p class="text1">cette chambre offre un espace bien agencé et lumineux<br> où chaque détail est soigneusement pensé pour assurer<br> votre confort et votre détente. Profitez d'un séjour paisible <br> et revitalisant dans notre chambre individuelle.</p>
                 <div class="carde1">
                    <div class="room-info1">
                        <h3>Room size</h3>
                        <h3>Bed Rooms</h3>
                        <h3>Personne</h3>
                        <h3>View</h3>
                    </div>
                    <div class="room-details1">
                        <h3>50 m2</h3>
                        <h3>02</h3>
                        <h3>01</h3>
                        <h3>View/city</h3>
                    </div>
                    <div class="price1">
                        <h3>350$/day</h3>
                    </div>
                    
                 </div>
                  <div class="btn">
                    <a href="#"  class="lien1" id="see1">See more</a>
                  </div>
                </div>
              </div>
              {{-- ici le div de 2eme card--}} 
              <div class="room2 max-w-sm rounded overflow-hidden shadow-lg"id="card2">
                <img class="w-full" src="{{ asset('image/double.jpg') }}" alt="Image 2"id="r2">
                <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2"><h3 id="titre2">Double Room</h3></div>
                  <p class="text2">
                    La chambre double est un refuge accueillant conçu pour offrir confort et intimité aux voyageurs en couple ou aux amis proches. Avec son ambiance chaleureuse et ses équipements modernes</p>
                  <div class="carde2">
                    <div class="room-info2">
                        <h3>Room size</h3>
                        <h3>Bed Rooms</h3>
                        <h3>Personne</h3>
                        <h3>View</h3>
                    </div>
                    <div class="room-details2">
                        <h3>50 m2</h3>
                        <h3>02</h3>
                        <h3>01</h3>
                        <h3>View/city</h3>
                    </div>
                    <div class="price2">
                        <h3>350$/day</h3>
                    </div>
                    
                  </div>
                  <div class="btn">
                    <a href="#"  class="lien1" id="see2">See more</a>
                    
                  </div>
                </div>
              </div>
               {{-- ici le div de 3 eme card--}} 
              <div class="room3 max-w-sm rounded overflow-hidden shadow-lg" id="card3">
                <img class="w-full" src="{{ asset('image/delux room.jpg') }}" alt="Image 3"id="r3">
                <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2"><h3 id="titre3">Deluxe Room</h3></div>
                  <p class="text3">
                    La chambre Deluxe est l'incarnation du luxe offrant à ses<br> occupants une expérience d'hébergement inégalée Conçue<br> avec soin pour répondre aux besoins les plus exigeants.</p>
                  <div class="carde3">
                    <div class="room-info3">
                        <h3>Room size</h3>
                        <h3>Bed Rooms</h3>
                        <h3>Personne</h3>
                        <h3>View</h3>
                    </div>
                    <div class="room-details3">
                        <h3>50 m2</h3>
                        <h3>02</h3>
                        <h3>01</h3>
                        <h3>View/city</h3>
                    </div>
                    <div class="price3">
                        <h3>350$/day</h3>
                    </div>
                  </div>
                  <div class="btn">
                    <a href="#"  class="lien1" id="see3">see more</a>
                    
                  </div>
                </div>
              </div>
               {{-- ici le div de 4eme card--}} 
              <div class="room4 max-w-sm rounded overflow-hidden shadow-lg" id="card4">
                <img class="w-full" src="{{ asset('image/royal2.jpg') }}" alt="Image 4"id="r4">
                <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2"><h3 id="titre4">Royal Room</h3></div>
                  <p class="text4">La Royal Room incarne le summum de l'élégance et du luxe. Avec ses espaces généreux et ses équipements haut de gamme,cette chambre offre une expérience d'hébergement véritablement royale. Plongez dans un monde de confort absolu et de sophistication.</p>
                  <div class="carde4">
                    <div class="room-info4">
                        <h3>Room size</h3>
                        <h3>Bed Rooms</h3>
                        <h3>Personne</h3>
                        <h3>View</h3>
                    </div>
                    <div class="room-details4">
                        <h3>50 m2</h3>
                        <h3>02</h3>
                        <h3>01</h3>
                        <h3>View/city</h3>
                    </div>
                    <div class="price4">
                        <h3>350$/day</h3>
                    </div>
                  </div>
                  <div class="btn">
                    <a href="#"  class="lien1" id="see4">See more</a>
                   
                  </div>
                </div>
              </div>
                 {{-- ici le div de 5eme card--}} 
                 <div class="room5 max-w-sm rounded overflow-hidden shadow-lg" id="card4">
                    <img class="w-full" src="{{ asset('image/family.jpg') }}" alt="Image 4"id="r5">
                    <div class="px-6 py-4">
                      <div class="titre font-bold text-xl mb-2"><h3 id="titre5">Family Room</h3></div>
                      <p class="text5">
                        La Family Room est l'option idéale pour les familles<br>en quête d'un espace confortable et accueillant. Spacieuse et bien aménagée,<br> cette chambre offre tout ce dont vous avez besoin <br>pour un séjour relaxant en famillial.</p>
                      <div class="carde5">
                        <div class="room-info5">
                            <h3>Room size</h3>
                            <h3>Bed Rooms</h3>
                            <h3>Personne</h3>
                            <h3>View</h3>
                        </div>
                        <div class="room-details5">
                            <h3>50 m2</h3>
                            <h3>02</h3>
                            <h3>01</h3>
                            <h3>View/city</h3>
                        </div>
                        <div class="price5">
                            <h3>350$/day</h3>
                        </div>
                      </div>
                      <div class="btn">
                        <a href="#"  class="lien1" id="see5">See more</a>
                       
                      </div>
                    </div>
                  </div>
                     {{-- ici le div de 6eme card--}} 
              <div class="room6 max-w-sm rounded overflow-hidden shadow-lg" id="card4">
                <img class="w-full" src="{{ asset('image/provilege.jpg') }}" alt="Image 4"id="r6">
                <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2"><h3 id="titre6">Privilege Room</h3></div>
                  <p class="text6">
                    La Privilege Room offre une expérience d'hébergement haut de gamme conçue pour répondre aux besoins des voyageurs les plus exigeants. Cette chambre élégante et sophistiquée est aménagée avec un souci du détail et un luxe raffiné.
                  </p>
                  <div class="carde6">
                    <div class="room-info6">
                        <h3>Room size</h3>
                        <h3>Bed Rooms</h3>
                        <h3>Personne</h3>
                        <h3>View</h3>
                    </div>
                    <div class="room-details6">
                        <h3>50 m2</h3>
                        <h3>02</h3>
                        <h3>01</h3>
                        <h3>View/city</h3>
                        <div class="price6">
                            <h3>350$/day</h3>
                        </div>
                    </div>
                  </div>
                  <div class="btn">
                    <a href="#"  class="lien1" id="see6">See more</a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>