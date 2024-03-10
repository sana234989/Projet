<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href= "{{ asset('style6.css') }}" >
    <title>Spa Detail</title>
</head>
<body>
    <div class="relative">
       @foreach($spas as $key=>$spa)
<div class="card{{$key+1}}">
    <div class="imag">
        <img class="hammam" src="{{ asset($spa->image_service) }}" alt="image">
    </div>
    <h1 class="titre">{{ $spa->nom_service }}</h1>
    <div class="prix">
        <div class="colonne1">
            @foreach($spadetails as $spaDetail)
            @if($spaDetail->idservice === $spa->id)
            <div class="row">
                <p class="title">{{ $spaDetail->sous_service }}</p>
                <p class="duree">{{ $spaDetail->time }}</p>
                <p class="duree">{{ $spaDetail->prix }}</p>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <a href="#" class="btn">RESERVER</a>
</div>
@endforeach
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