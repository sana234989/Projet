<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('stylee.css') }}">
    <title>Home Page</title>

</head>

<body class="flex flex-col">

    <div class="navbar w-full">
        @include('navbar')

    </div>
    <div class="home flex-grow relative">
        <div class="content w-full">
            <div class="slider relative">
                <img src="{{ asset('image/newimg5.jpg') }}" alt="Image 1" onclick="changeImage(this)">
                <div class="absolute inset-0 flex flex-col ">
                    <h1 class="titre sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl">Bienvenue à l'hôtel Tifawt</h1>
                    <div class="text sm:text-xs md:text-sm lg:text-base xl:text-lg 2xl:text-xl">
                        <p class="text1">L'hôtel Tifawt vous offre une expérience de séjour inoubliable au cœur de la magnifique ville d'Agadir. Avec des chambres élégantes et confortables, un service de qualité et une vue imprenable sur l'océan Atlantique, notre hôtel est l'endroit idéal pour vos vacances ou voyages d'affaires. Profitez de notre piscine extérieure, de notre restaurant gastronomique et de notre spa relaxant pour un séjour parfait.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="relative home flex-grow">
        <div class="content w-full">
            <div class="slider">
                <img src="{{ asset('image/newimg5.jpg') }}" alt="Image 1" onclick="changeImage(this)">
            </div>
        </div>
        <h1 class="titre">Bienvenue à l'hôtel Tifawt</h1>
        <div class="text ">
            <p class="text1">L'hôtel Tifawt vous offre une expérience de séjour inoubliable au cœur de la magnifique
                ville d'Agadir</span>. Avec des chambres élégantes et confortables, un service de qualité et une vue
                imprenable sur l'océan Atlantique, notre hôtel est l'endroit idéal pour vos vacances ou voyages
                d'affaires. Profitez de notre piscine extérieure, de notre restaurant gastronomique et de notre spa
                relaxant pour un séjour parfait.</p>
        </div>
    </div> --}}
    <!-- About Section -->
    <div class="about w-full mt-8 py-4">
        @include('aboutus')
    </div>
    <div class="service w-full mt-8 py-4">
        @include('services')
    </div>
    <div class="gallery flex flex-col items-center justify-center w-full h-full mt-8 py-4">
        @include('Our_gallery')
    </div>
    <div class="footer w-full ">
        @include('footer')
    </div>


    <script>
        function changeImage(img) {
            // Liste des images à afficher
            const images = [
                "{{ asset('image/newimg5.jpg') }}",
                "{{ asset('image/newimg7.jpg') }}",
                "{{ asset('image/newimg8.jpg') }}"
            ];

            const currentIndex = images.indexOf(img.src);
            const nextIndex = (currentIndex + 1) % images.length;
            img.src = images[nextIndex];
            //changer le contexte de text apres le chang de chaque slider
            /* const text = document.querySelector('.text1');
    if (nextIndex === 0) {
        text.innerHTML = "<span class='text2'>Bienvenue a Tifawin</span>, où le charme de la culture locale encontre contemporain pour une experience incormparable";
    } else if (nextIndex === 1) {
        text.innerHTML = "<span class='text2'>Détendez-vous et profitez d'un séjour luxueux dans notre hôtel de charme. Avec des chambres élégantes, des équipements haut de gamme et un service exceptionnel, nous nous assurons  que votre séjour soit aussi confortable que mémorable.</span>";
    } else if (nextIndex === 2) {
        text.innerHTML = "<span class='text2'>Rechargez vos batteries avec une multitude d'activités passionnantes,puis détendez-vous dans le confort de notre hôtel après une journée bien remplie</span>";
    }*/
        }
        // Appeler la fonction changeImage toutes les 8 secondes
        setInterval(() => {
            const img = document.querySelector('.slider img');
            changeImage(img);
        }, 8000); // 8000 millisecondes = 8 secondes
    </script>




</body>

</html>
