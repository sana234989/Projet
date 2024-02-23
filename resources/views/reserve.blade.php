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
</style>
<script src="https://cdn.tailwindcss.com"></script>
    </head>

<body class="h-full">
  <div class="bg-white bg-opacity-50 p-8 rounded-lg shadow-md mt-9 mr-9 ml-10 ">
  <div class="relative mt-4">
      <input type="email" placeholder="Entrez votre adresse e-mail" class="block w-full px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="relative mt-6 flex flex-row">
    <input type="number" placeholder=" nombre des enfants" class="block basis-1/2 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    <input type="number" placeholder=" nombre des adultes" class="block basis-1/2 ml-2 mr-1 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="relative mt-6 flex flex-row">
    <input type="date" placeholder="Entrez nombre date de debut" class="block basis-1/2  px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    <input type="time" placeholder="Entrez nombre time de debut" class="block basis-1/2 ml-2 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="relative mt-6 flex flex-row">
   
    <input type="date" placeholder="Entrez nombre date de fin" class="block basis-1/2  ml-2 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
    <input type="time" placeholder="Entrez nombre time de fin" class="block basis-1/2 ml-2 px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
  </div>
    <div class="relative mt-6">
      <select class="block w-full px-4 py-2 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        <option value="" disabled selected hidden>Choisissez une option</option>
      
      </select>
    </div>
    <div class="relative">
      <select class="block w-full px-4 py-2 mt-4 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        <option value="" disabled selected hidden>Choisissez une option</option>
        
      </select>
    </div>
    <div class="relative">
      <select class="block w-full px-4 py-2 mt-4 text-gray-700 bg-white bg-opacity-75 border border-dark-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        <option value="" disabled selected hidden>Choisissez une option</option>
       
      </select>
     
    </div>
    <div class="relative mt-6 flex flex-row mt-9">
    <button  class=" basis-1/2 ml-1 bg-lime-500 hover:bg-lime-700 text-white font-bold py-2 px-4 rounded">confirmer</button>
      <button  class="basis-1/2 ml-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 ml-4 rounded">Annuler</button>
    </div>
    </div>
  </div>

</body>

</html>
