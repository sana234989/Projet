<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('stylee.css') }}">
    <title>Document</title>
    
</head>

<body>
    <div class="navbar">
        @include('navbar')
    </div>

    <div class="content">
            <div class="slider">
                <img src="{{ asset('image/hotel1.jpg') }}" alt="Image 1"onclick="changeImage(this)">
            </div>
        </div>
        <div class="text">
            <p class="text1"><span class="text2">Bienvenue à Tifawin</span>, où le charme de la culture locale<br>encontre contemporain pour une expérience incomparable.</p>
        </div>
      
    </div>
    </div>
    <script>
        function changeImage(img) {
            // Liste des images à afficher
            const images = [
                "{{ asset('image/hotel1.jpg') }}",
                "{{ asset('image/slide1.jpg') }}",
                "{{ asset('image/slide2.jpg') }}"
            ];

            const currentIndex = images.indexOf(img.src);
            const nextIndex = (currentIndex + 1) % images.length;
            img.src = images[nextIndex];
            //changer le contexte de text apres le chang de chaque slider
            const text = document.querySelector('.text1 .text2');
    if (nextIndex === 0) {
        text.textContent = "Bienvenue a Tifawin ou le charme de la culture locale encontre contemporain pour une experience incormparable";
    } else if (nextIndex === 1) {
        text.textContent = "Détendez-vous et profitez d'un séjour luxueux dans notre hôtel de charme. Avec des chambres élégantes, des équipements haut de gamme et un service exceptionnel, nous nous assurons que votre séjour soit aussi confortable que mémorable.";
    } else if (nextIndex === 2) {
        text.textContent = "Rechargez vos batteries avec une multitude d'activités passionnantes, puis détendez-vous dans le confort de notre hôtel après une journée bien remplie";
    }
}
        // Appeler la fonction changeImage toutes les 8 secondes
        setInterval(() => {
            const img = document.querySelector('.slider img');
            changeImage(img);
        }, 8000); // 8000 millisecondes = 8 secondes
    </script>
</body>

</html> 