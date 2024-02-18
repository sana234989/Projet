<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href= "{{ asset('style6.css') }}" >
    <title>Document</title>
</head>
<body>
    <div class="relative">
        <div class="card1">
            <div class="imag">
       <img class="hammam" src="{{asset('image/hammam1.jpg')}}" alt="image">
            </div>
       <h1 class="titre">HAMMAM</h1>
       <div class="prix">
        <div class="colonne1">
            <div class="row">
                <p class="title">Bain hydromassant</p>
                <p class="duree">30min</p>
                <p class="duree">250dh</p>
            </div>
            <div class="row">
                <p class="title">Gommage en cabine</p>
                <p class="duree">30min</p>
                <p class="duree">250dh</p>
            </div>
            <div class="row">
                <p class="title">Douche sous affusion</p>
                <p class="duree">30min</p>
                <p class="duree">300dh</p>
            </div>
        </div>
    </div>
        <a href="#" class="btn">RESERVER</a>
        </div>
        <div class="card2">
            <div class="imag">
            <img class="soin" src="{{asset('image/soin1.jpg')}}" alt="image">
            </div>
            <h1 class="titre">SOINS CORPS</h1>
            <div class="prix">
                <div class="colonne1">
                    <div class="row">
                        <p class="title">Bain hydromassant</p>
                        <p class="duree">30min</p>
                        <p class="duree">250dh</p>
                    </div>
                    <div class="row">
                        <p class="title">Gommage en cabine</p>
                        <p class="duree">30min</p>
                        <p class="duree">250dh</p>
                    </div>
                    <div class="row">
                        <p class="title">Douche sous affusion</p>
                        <p class="duree">30min</p>
                        <p class="duree">300dh</p>
                    </div>
                </div>
            </div>
        <a href="#" class="btn" >RESERVER</a>
             </div>
             <div class="card3">
                <div class="imag">
                <img class="visage" src="{{asset('image/voisine5.jpg')}}" alt="image">
                </div>
                <h1 class="titre">SOINS DU VISAGE </h1>
                <div class="prix">
                    <div class="colonne1">
                        <div class="row">
                            <p class="title">Bain hydromassant</p>
                            <p class="duree">30min</p>
                            <p class="duree">250dh</p>
                        </div>
                        <div class="row">
                            <p class="title">Gommage en cabine</p>
                            <p class="duree">30min</p>
                            <p class="duree">250dh</p>
                        </div>
                        <div class="row">
                            <p class="title">Douche sous affusion</p>
                            <p class="duree">30min</p>
                            <p class="duree">300dh</p>
                        </div>
                    </div>
                </div>
                 <a href="#"class="btn">RESERVER</a>
                 </div>
    </div>
    <script>
     document.addEventListener('DOMContentLoaded', function() {
    function changeImage(cardId) {
        // Liste des images à afficher pour chaque carte
        const imageLists = {
            card1: [
                "{{ asset('image/hammam1.jpg') }}",
                "{{ asset('image/hammam2.jpg') }}",
                "{{ asset('image/hammam3.jpg') }}"
            ],
            card2: [
                "{{ asset('image/soin1.jpg') }}",
                "{{ asset('image/soin2.jpg') }}",
                "{{ asset('image/soin3.jpg') }}"
            ],
            card3: [
                "{{ asset('image/voisine5.jpg') }}",
                "{{ asset('image/visage1.jpg') }}",
                "{{ asset('image/visage2.jpg') }}"
            ],
        };

        // Sélectionnez l'image de la carte spécifiée
        console.log("je suis zineb");
        const image = document.querySelector(`.${cardId} .imag img`);
        if (!image) {
        console.error(`Image not found for card ${cardId}`);
        return;
    }

        // Obtenez l'index de l'image actuelle dans la liste des images de la carte
        const currentIndex = imageLists[cardId].indexOf(image.src);
        console.log("je suis zineb");

        // Calculez l'index de l'image suivante en prenant en compte la boucle de retour
        const nextIndex = (currentIndex + 1) % imageLists[cardId].length;
        console.log("je suis zineb");

        // Changez la source de l'image pour afficher l'image suivante
        image.src = imageLists[cardId][nextIndex];
        console.log("je suis zineb");
    }

    // Appeler la fonction changeImage pour chaque carte toutes les 8 secondes
    setInterval(() => {
        changeImage('card1');
        changeImage('card2');
        changeImage('card3');
        // Appelez changeImage avec les autres cartes si nécessaire
    }, 8000);
});
            </script>
        
</body>
</html>