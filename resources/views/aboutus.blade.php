<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <title>About Us</title>
</head>
<div class="navbar">
    @include('navbar')
</div>

<div class="text-center justify-center mt-20 px-6">
    <h1 class="font-serif text-xl  font-bold">The Small Detail Make the Difference</h1>
    <p class="text-lg text-dark-500 mt-10 mr-9 ml-9"> chaque détail est soigneusement pensé pour offrir une expérience
        immersive dans la riche culture du pays. Retrouvez l'harmonie
        intérieure dans notre spa d'hôtel, un sanctuaire dédié à la relaxation et au renouveau. Plongez dans une
        expérience sensorielle .

    </p>
</div>
<div class="flex flex-row mt-20 px-6">
    <div class="basis-1/8 content-center"></div>
    <div class="basis-1/3 content-center bg-slate-50  ">
        <div
            class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
            <img src="images/v19_10.png" alt=""
                class="w-full h-60 object-cover rounded-lg sm:h-80 sm:col-span-2 lg:col-span-full" loading="lazy">

        </div>
        <button
            class=" px-4 py-1 text-sm text-dark-600 font-semibold rounded-full border border-dark-200 hover:text-white hover:bg-lime-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-lime-600 focus:ring-offset-2 ml-2 mt-2 ">Know
            More</button>
    </div>
    <div class="basis-1/12 content-center"></div>
    <div class="basis-1/3 content-center">
        <div
            class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
            <img src="images/v19_9.png" alt=""
                class="w-full h-60 object-cover rounded-lg sm:h-80 sm:col-span-2 lg:col-span-full" loading="lazy">

        </div>
    </div>
    <div class="basis-1/12 content-center"></div>
    <div class="basis-1/3 content-center">
        <div
            class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
            <img src="images/v19_8.png" alt=""
                class="w-full h-60 object-cover rounded-lg sm:h-80 sm:col-span-2 lg:col-span-full" loading="lazy">

        </div>
    </div>
    <div class="basis-1/8 content-center"></div>
</div>

</body>

</html>
