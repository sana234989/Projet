<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href= "{{ asset('style3.css') }}">

    <title>Rooms</title>
</head>

<body class="bg-gray-200">
    <div class="card flex justify-center items-center h-auto">
        <div class="rooms grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 p-4">
            <h4 class="title text-center md:text-left md:col-span-2">Welcome to our rooms </h4>
            <p class="text text-center md:text-left">
                Bienvenue à notre hôtel ! Nous sommes ravis de vous accueillir dans notre établissement <br>où vous
                découvrirez un monde de confort et d'élégance. Explorez nos chambres exceptionnelles conçues pour offrir
                une expérience de séjour inoubliable. </p>
            @foreach ($roomstype as $key => $room)
                <div
                    class="room{{ $key + 1 }} max-w-sm rounded overflow-hidden shadow-lg"id="card{{ $key + 1 }}">
                    <img class="images w-full" src="{{ $room->image }}" alt="{{ $room->type }}"
                        id="r{{ $key + 1 }}">
                    <div class="px-6 py-4">
                        <div class="titre{{ $key + 1 }}">
                            <h3 id="titre{{ $key + 1 }}">{{ $room->type }}</h3>
                        </div>
                        <p class="text{{ $key + 1 }}">{{ $room->description }}</p>
                        <div class="carde{{ $key + 1 }} m1">
                            <div class="room-info{{ $key + 1 }}">
                                <h3>Room size</h3>
                                <h3>Bed Rooms</h3>
                                <h3>Personne</h3>
                                <h3>View</h3>
                            </div>
                            <div class="room-details{{ $key + 1 }}">
                                <h3>{{ $room->capacity }} m2</h3>
                                <h3>02</h3>
                                <h3>01</h3>
                                <h3>View/city</h3>
                            </div>
                            <div class="price{{ $key + 1 }}">
                                <h3>{{ $room->price }}$/day</h3>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="roomdetail{{ $room->id }}" class="m11 lien1" id="see{{ $key + 1 }}">See
                                more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
<script>
    const cards = document.querySelectorAll('.m1');

    // Parcourez chaque carte
    cards.forEach((card) => {
        // Ajoutez un écouteur d'événements pour le survol de la souris
        card.addEventListener('mouseover', () => {
            // Ajoutez une classe pour animer la bordure
            card.classList.add('border-animation');
        });

        // Ajoutez un écouteur d'événements lorsque la souris quitte la carte
        card.addEventListener('mouseout', () => {
            // Supprimez la classe d'animation de la bordure
            card.classList.remove('border-animation');
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        let images = document.querySelectorAll('.images');
        images.forEach(function(image) {
            image.addEventListener('mouseover', function() {
                this.style.transform = 'translateX(50%)';
            });
            image.addEventListener('mouseout', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    });
    const btns = document.querySelectorAll('.m11');
    btns.forEach(function(btn) {
        btn.addEventListener('mouseover', function() {
            btn.classList.add('button');
        });
        btn.addEventListener('mouseout', function() {
            btn.classList.remove('button');
        });
    });
</script>

</html>
