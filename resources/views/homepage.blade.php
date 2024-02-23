<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('stylee.css') }}">
    <title>Document</title>
    
</head>

<body>
    <div class="navbar">
       {{-- @include('navbar')--}}
       @include('nav')
    </div>

    <div class="content">
            <div class="slider">
                <img src="{{ asset('image/newimg5.jpg') }}" alt="Image 1"onclick="changeImage(this)">
            </div>
        </div>
        <h1 class="titre">Bienvenue à l'hôtel Tifawt</h1>  
        <div class="text">    
            <p class="text1">L'hôtel Tifawt vous offre une expérience de séjour inoubliable au cœur de la magnifique ville d'Agadir</span>. Avec des chambres élégantes et confortables, un service de qualité et une vue imprenable sur l'océan Atlantique, notre hôtel est l'endroit idéal pour vos vacances ou voyages d'affaires. Profitez de notre piscine extérieure, de notre restaurant gastronomique et de notre spa relaxant pour un séjour parfait.</p>
        </div>
      
    </div>
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