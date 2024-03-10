<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout avec Image au-dessus du Texte - Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href= "{{ asset('style2.css') }}" >
</head>
<body class="bg-gray-200">

  <div class="general card flex justify-center items-center h-auto">
      {{-- ici on a le div qui genere tout les cards --}}
      <div class="intro grid grid-cols-1 md:grid-cols-2 gap-4 p-4 md:p-8 md:w-full">
          <h4 class="title md:text-3xl text-center md:text-left">welcome to our restaurant</h4>
          <p class="text text-base md:text-lg">
              Bienvenue dans le restaurant de notre hôtel, où chaque repas est une expérience<br> délicieuse imprégnée de sophistication et de convivialité. Niché au cœur de notre<br> établissement notre restaurant offre bien plus qu'une simple cuisine exquise, nos chefs talentueux créent des plats raffinés qui éveillent les sens et enchantent les papilles.
          </p>
          {{-- ici le div de 1 ere card --}}
          @foreach ($restaurant as $key=> $res)
          <div class="carde1 max-w-sm rounded overflow-hidden shadow-lg" id="card{{$key+1}}">
              <img class="w-full md:h-80 object-cover object-center" src="{{ asset($res->url)}}" alt="Image 1">
              <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2">{{$res->title}}</div>
                  <p class="text-gray-700 text-base">{{$res->description}}</p>
                  <div class="btn">
                      {{-- <a href="{{ route() }}" class="lien1" id="know{{$key+1}}">Know more</a> --}}
                      <a href="{{ route('restaurant.menu', ['id' => $res->id]) }}" class="lien1" id="know{{$key+1}}">En savoir plus</a>
                      <a href="#" class="lien1" id="reserv{{$key+1}}">Reserver</a>
                  </div>
              </div>
          </div>
          @endforeach
   <script>
function changeImage(cardId) {
    // Liste des images à afficher pour chaque carte
    const imageLists = {
        card1: [
            "{{ asset('image/frensh.png') }}",
            "{{ asset('image/frens.jpg') }}",
            "{{ asset('image/france.jpg') }}"
        ],
        card2: [
            "{{ asset('image/chinoise.png') }}",
            "{{ asset('image/chinoise1.jpg') }}",
            "{{ asset('image/chi.jpg') }}"
        ],
        card3: [
            "{{ asset('image/marocain2.jpg') }}",
            "{{ asset('image/marocain.jpg') }}",
            "{{ asset('image/maroca.jpg') }}"
        ],
        card4: [
            "{{ asset('image/espagnol.png') }}",
            "{{ asset('image/spanid.jpg') }}",
            "{{ asset('image/esp.jpg') }}"
        ]

        // Ajoutez d'autres cartes avec leurs images associées ici
    };

    // Sélectionnez l'image de la carte spécifiée
    const image = document.querySelector(#${cardId} img);

    // Obtenez l'index de l'image actuelle dans la liste des images de la carte
    const currentIndex = imageLists[cardId].indexOf(image.src);

    // Calculez l'index de l'image suivante en prenant en compte la boucle de retour
    const nextIndex = (currentIndex + 1) % imageLists[cardId].length;

    // Changez la source de l'image pour afficher l'image suivante
    image.src = imageLists[cardId][nextIndex];
}

// Appeler la fonction changeImage pour chaque carte toutes les 8 secondes
setInterval(() => {
    changeImage('card1');
    changeImage('card2');
    changeImage('card3');
    changeImage('card4');
    // Appelez changeImage avec les autres cartes si nécessaire
}, 8000);

    </script>
</body>
</html>