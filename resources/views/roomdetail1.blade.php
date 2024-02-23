<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <link rel="stylesheet" href= "{{ asset('style4.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="room-detail w-96 md:w-5/6 h-96 md:h-auto p-8 md:p-0" id="room">
        <div class="md:mr-8">
            <img src="{{ asset('image/single room.jpg') }}" alt="image1" id="img1" class="mb-4 md:mb-0 md:mr-4 w-72 h-72">
        </div>
        <div class="md:flex-grow"id="info">
            <div class="room1">
                <h3 class="text-xl font-bold mb-2 font-semibold " id="name">Room name</h3>
                <h3 class="text-1xl font-bold mb-2 text-600 font-serif" id="name1">Single Room</h3>
            </div>
            <div class="room11">
                <h3 class="text-xl font-bold mb-2" id="price1">Price</h3>
                <h3 class="text-1xl font-bold mb-2 text-blue-600 font-serif" id="price2">375$/day</h3>
            </div>
            <hr class="trait">
            <div class="service1">
                <h3 class="font-semibold mb-2">Room's service:</h3>
                <ul class="list-disc  ml-6 mb-4">
                    <li>2 balcon</li>
                    <li>2 large wc</li>
                    <li>wifi</li>
                </ul>
            </div>
            <hr class="trait">
            <div class="btn">
                    <form action="{{route('verifydate')}}" method="GET">
                        @csrf <!-- Ajoutez le jeton CSRF pour la sécurité -->
                        <input type="hidden" name="chambre" value="Single Room"> <!-- Champ caché pour le nom de la chambre -->
                        <div class="flex flex-col md:flex-row mb-4 "id="checkin">
                            <label class="check mr-2 md:mr-4">Check-in</label>
                            <input type="date" name="date_debut" class="border border-gray-300 px-2 py-1 rounded mb-2 md:mb-0">
                        </div>
                        <div class="flex flex-col md:flex-row mb-4" id="checkout">
                            <label class="check mr-2 md:mr-4">Check-out</label>
                            <input type="date" name="date_fin" class="border border-gray-300 px-2 py-1 rounded mb-2 md:mb-0">
                        </div>
            
                        <input type="hidden" name="erreur"> 
                 
                        <div class="reserv flex items-center">
                            <button type="submit" class="mr-8 border-style: solid;" id="lien1">Check Now</button>
                            <a href="#" id="lien2">Reserver</a>
                        </div>

                    </form>
                    @if(Session::has('erreur'))
    <div class="alert alert-danger">
        {{ Session::get('erreur') }}
    </div>
@endif
                </div>
            </div>
        </div>
</body>
</html>