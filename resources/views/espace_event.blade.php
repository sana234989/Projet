<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="./css/main.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>welcome to espace evenement</title>
</head>

<body class="text-center">


    <br>
 

    <div class="p-3 bg-white ">
    <h1 class="mt-1 text-lg font-semibold text-dark sm:text-slate-900 md:text-2xl dark:sm:text-dark">Welcome to <span class="text-lime-400">Hotel tifawt</span></h1>
        
       
        <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400 mr-9 ml-9">
            Entrez dans l'univers
            chaleureux de l'Hôtel Tifawt, où l'élégance marocaine rencontre le charme traditionnel. <br>Nos espaces dédiés
            aux événements, imprégnés de l'hospitalité marocaine.
           
        </p>
      
            <button type="button" class="mt-2 animate-bounce w-6 h-6 bg-orange-500 text-dark text-sm leading-6 font-medium py-2 px-3 rounded-lg "></button>
        
            <button type="button" class="mt-2  hover:scale-110 hover:bg-orange-500 duration-300  ease-in duration-300 bg-orange-100 text-dark text-sm leading-6 font-medium py-2 px-3 rounded-lg ">Contact us</button>
       
      </div>

 










@foreach($donnees as $donnee)
  





<main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
    <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
      <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
        <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-dark">{{ $donnee->name }}</h1>
      
      </div>
      <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
        <img src= "{{ $donnee->image1 }}" alt="" class="hover:scale-110  duration-300 w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
        <img src="{{ $donnee->image2 }}" alt="" class="hidden w-full h-52 object-cover rounded-lg sm:block sm:col-span-2 md:col-span-1 lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
        <img src="{{ $donnee->image3 }}" alt="" class="hidden w-full h-52 object-cover rounded-lg md:block lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
      </div>
     
    <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
      <button type="button" class="hover:scale-110 hover:bg-lime-500 duration-300  bg-lime-200 text-dark text-sm leading-6 font-medium py-2 px-3 rounded-lg shadow-2xl">Check availability</button>
    </div>
    <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">
    {{ $donnee->description }}<br>
    Capacité : {{ $donnee->capacite }}  Prix : {{ $donnee->prix }}
    </p>
  </div>
</main>


@endforeach

</body>
<script>

</script>

</html>