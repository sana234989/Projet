<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Utilisation de 100vh pour occuper toute la hauteur de l'écran */
            display: flex;
            flex-direction: column;
        }

        .navbar {
            /* Styles pour le navbar */
        }
        @media screen and (min-width: 768px){
        .content {
            flex: 1; /* Permet au contenu de prendre tout l'espace restant */
            position: relative; /* Position relative pour que les éléments enfants puissent être positionnés par rapport à lui */
            overflow: hidden; /* Pour masquer le contenu débordant des images */
        }

        .slider {
            width: 100%; /* Pour que le slider occupe toute la largeur de la page */
            height: 100%; /* Pour que le slider occupe toute la hauteur de la page */
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute; /* Position absolue pour empiler les images les unes sur les autres */
            top: 0;
            left: 0;
        }
    }

        .slider img {
            width: 100%; /* Pour que l'image occupe toute la largeur du slider */
            height: 100%; /* Pour que l'image occupe toute la hauteur du slider */
            object-fit: cover; /* Pour que l'image conserve son ratio et soit coupée pour remplir le slider */
            position: absolute; /* Position absolue pour empiler les images les unes sur les autres */
            top: 0;
            left: 0;
        }
       /* .indicators {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }
        .indicator {
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            margin: 0 5px; Espacement entre les indicateurs 
            cursor: pointer;
        }

        .indicator.active {
            background-color: #EEFF0E; /* Couleur de l'indicateur actif 
        }*/

        .text {
            position: absolute;
           margin-top: 230px;
            left: 50%;
            font-size:20px;
            transform: translateX(-50%);
            text-align: center;
            color: white;
        }

        .text1 {
            margin-bottom: 20px; /* Marge entre les lignes de texte */
        }

        .text2 {
            color: #EEFF0E;
        }

       
    </style>
</head>

<body>
    <div class="navbar">
        @include('navbar')
    </div>

    <div class="content">
            <div class="slider">
                <img src="{{ asset('image/hotel1.jpg') }}" alt="Image 1" onmouseover="changeImage(this)">
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
}
    </script>
</body>

</html> 