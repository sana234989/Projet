<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href= "{{ asset('style5.css') }}" >
    <title>Spa</title>
  
</head>
<body>
    <div class="slider relative">
        <img src="{{ asset('image/spa11.jpg') }}" alt="Image 1" class="img" onclick="changeImage(this)">
        <div class="absolute composents top-0 left-0 p-4 ">
            <h1 class="text11 font-bold">Un Havre De Paix Revitalisant</h1>
            <h2 id="text1">Séance de relaxation</h2>
            <p class="text">Se sentir en bonne santé et bien dans sa peau n'est pas un luxe mais une nécessité absolue.<br>Guérissez votre âme et votre corps grâce à nos traitements miraculeux et rentrez chez vous comme<br> une nouvelle personne, calme et rafraîchie.</p>
            <div class="deatil1">
                <h2 class="left"><span class="titre">DATES D'OUVERTURE :<br></span> Du lundi au dimanche</h2>
                <h2 class="right"><span class="titre">HEURES D'OUVERTURE :</span><br>10:00 - 19:00</h2>
            </div>
            <a class="details" href="{{ route('spadetails') }}">
                Detail <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <script>
        function changeImage(img) {
            // Liste des images à afficher
            const images = [
                "{{ asset('image/spa11.jpg') }}",
                "{{ asset('image/spa1.jpg') }}",
                "{{ asset('image/spa12.jpg') }}"
            ];

            const currentIndex = images.indexOf(img.src);
            const nextIndex = (currentIndex + 1) % images.length;
            img.src = images[nextIndex];
            //changer le contexte de text apres le chang de chaque slider
  
        }
        // Appeler la fonction changeImage toutes les 8 secondes
        setInterval(() => {
            const img = document.querySelector('.slider img');
            changeImage(img);
        }, 2000); // 8000 millisecondes = 8 secondes
    </script>
</body>
</html>