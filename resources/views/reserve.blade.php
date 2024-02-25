<!DOCTYPE html>
<html>
    <head>
   
<style>
  body{

background-image: url('https://cdn.pixabay.com/photo/2014/07/21/19/20/lobby-398845_640.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%; 
  }
  .rating {
  unicode-bidi: bidi-override;
  direction: rtl;
}

.star {
  display: inline-block;
  font-size: 24px;
  cursor: pointer;
}

.star.selected,
.star:hover {
  color: yellow;
}

</style>
<script src="https://cdn.tailwindcss.com"></script>
    </head>

<body class="h-full">
  <form method="post" action="app\Http\Controllers\reservController.php">
  <div class="bg-white bg-opacity-50 p-8 rounded-lg shadow-md mt-9 mr-9 ml-10 ">
  <div class="relative mt-4">
      <input type="email" name="email" placeholder="Entrez votre adresse e-mail" class="block w-full px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="relative mt-6 flex flex-row">
    <input type="number"  name="date_d" placeholder=" nombre des enfants" class="block basis-1/2 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    <input type="number" placeholder=" nombre des adultes" class="block basis-1/2 ml-2 mr-1 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="relative mt-6 flex flex-row">
    <input type="date" name="date_f" placeholder="Entrez nombre date de debut" class="block basis-1/2  px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    <input type="time" placeholder="Entrez nombre time de debut" class="block basis-1/2 ml-2 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="relative mt-6 flex flex-row">
   
    <input type="date" placeholder="Entrez nombre date de fin" class="block basis-1/2  ml-2 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    <input type="time" placeholder="Entrez nombre time de fin" class="block basis-1/2 ml-2 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
  </div>
    <div class="relative mt-6">
      <select name="chambre" class="block w-full px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
      @foreach($donnees2 as $donnee)
        <option >{{ $donnee->name }}</option>
    @endforeach
      </select>
    </div>
    <div class="relative">
      <select  name="espace_event"  class="block w-full px-4 py-2 mt-4 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
      
     
    
    @foreach($donnees1 as $donnee)
        <option >{{ $donnee->name }}</option>
    @endforeach
        
      </select>
    </div>
    <div class="relative">
      <select name="service" class="block w-full px-4 py-2 mt-4 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
      @foreach($donnees3 as $donnee)
        <option >{{ $donnee->name }}</option>
    @endforeach
       
      </select>
     
    </div>
    <div class="relative mt-6 flex flex-row mt-9">
    <button name="confirmer" class=" basis-1/2 ml-1 bg-lime-500 hover:bg-lime-700 text-white font-bold py-2 px-4 rounded">confirmer</button>
      <button  class="basis-1/2 ml-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 ml-4 rounded">Annuler</button>
    </div>
    </div>
  </form>

</div>

  </div>
  <div class="rating">
  <span class="star" data-value="1">&#9733;</span>
  <span class="star" data-value="2">&#9733;</span>
  <span class="star" data-value="3">&#9733;</span>
  <span class="star" data-value="4">&#9733;</span>
  <span class="star" data-value="5">&#9733;</span>
</div>

</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.star');

    stars.forEach(function(star) {
        star.addEventListener('click', function() {
            this.classList.toggle('selected');
        });
    });
});







</script>
</html>
