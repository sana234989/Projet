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
              Bienvenue dans le restaurant de notre hôtel, où chaque repas est une expérience délicieuse imprégnée de sophistication et de convivialité. Niché au cœur de notre établissement, notre restaurant offre bien plus qu'une simple cuisine exquise, nos chefs talentueux créent des plats raffinés qui éveillent les sens et enchantent les papilles.
          </p>
          {{-- ici le div de 1 ere card --}}
          <div class="carde1 max-w-sm rounded overflow-hidden shadow-lg" id="card1">
              <img class="w-full md:h-80 object-cover object-center" src="{{ asset('image/frensh.png') }}" alt="Image 1">
              <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2">French restaurant</div>
                  <p class="text-gray-700 text-base">
                      La cuisine française fait référence à divers styles gastronomiques dérivés de la tradition française. Elle a évolué au cours des siècles, suivant ainsi les changements sociaux et politiques du pays
                  </p>
                  <div class="btn">
                      <a href="#" class="lien1" id="know1">Know more</a>
                      <a href="#" class="lien1" id="reserv1">Reserver</a>
                  </div>
              </div>
          </div>
          {{-- ici le div de 2eme card --}}
          <div class="carde1 max-w-sm rounded overflow-hidden shadow-lg" id="card2">
              <img class="w-full md:h-80 object-cover object-center" src="{{ asset('image/chinoise.png') }}" alt="Image 2">
              <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2">Chinese restaurant</div>
                  <p class="text-gray-700 text-base">
                      Dans les restaurants de style chinois, les tables, habituellement de forme arrondie, sont équipées, d'un large plateau central tournant, très pratique pour atteindre chaque plat. Les sanitaires.
                  </p>
                  <div class="btn">
                      <a href="#" class="lien1" id="know2">Know more</a>
                      <a href="#" class="lien1" id="reserv2">Reserver</a>
                  </div>
              </div>
          </div>
          {{-- ici le div de 3 eme card --}}
          <div class="carde1 max-w-sm rounded overflow-hidden shadow-lg" id="card3">
              <img class="w-full md:h-80 object-cover object-center" src="{{ asset('image/marocain2.jpg') }}" alt="Image 3">
              <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2">Marocain Restaurant</div>
                  <p class="text-gray-700 text-base">
                      Un restaurant marocain offre une expérience culinaire riche et variée, imprégnée des saveurs exotiques et des traditions de la cuisine du Maroc. Les plats sont souvent préparés avec des ingrédients frais et des épices aromatiques.
                  </p>
                  <div class="btn">
                      <a href="#" class="lien1" id="know3">Know more</a>
                      <a href="#" class="lien1" id="reserv3">Reserver</a>
                  </div>
              </div>
          </div>
          {{-- ici le div de 4eme card --}}
          <div class="carde1 max-w-sm rounded overflow-hidden shadow-lg" id="card4">
              <img class="w-full md:h-80 object-cover object-center" src="{{ asset('image/espagnol.png') }}" alt="Image 4">
              <div class="px-6 py-4">
                  <div class="titre font-bold text-xl mb-2">Espagnol restaurant</div>
                  <p class="text-gray-700 text-base">
                      La cuisine espagnole fait référence à divers styles gastronomiques dérivés de la tradition française. Elle a évolué au cours des siècles, suivant ainsi les changements sociaux et politiques du pays
                  </p>
                  <div class="btn">
                      <a href="#" class="lien1" id="know4">Know more</a>
                      <a href="#" class="lien1" id="reserv4">Reserver</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
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
    const image = document.querySelector(`#${cardId} img`);

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