<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

    <div class="navbar">
        @include('navbar')
    </div>

    <div class="m-6 px-6 py-6">
        <div class="flex flex-row mt-20">
            <div class="basis-1/2 content-center">
                <div
                    class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                    <img src="images/v122_30.png" alt=""
                        class="w-full h-60 object-cover rounded-lg sm:h-80 sm:col-span-2 lg:col-span-full"
                        loading="lazy">

                </div>
            </div>


            <div class="basis-1/2 text-center px-8">
                <div
                    class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
                    <h1 class="font-serif text-lg  text-lime-600 font-bold">Spa and Beauty</h1>

                </div>
                <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1">
                    Retrouvez l'harmonie
                    intérieure dans notre spa d'hôtel, un sanctuaire dédié à la relaxation et au renouveau. Plongez dans
                    une
                    expérience sensorielle .
                </p>
                <button type="button"
                    class="bg-lime-200 text-dark text-sm leading-6 font-medium py-2 px-3 mt-8 rounded-lg"><a href="{{ route('spa') }}">See more</a></button>
            </div>
        </div>









        <div class="flex flex-row">
            <div class="basis-1/2 text-center px-8">
                <div
                    class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
                    <h1 class="font-serif text-lg  text-lime-600 font-bold">Espace evenement</h1>

                </div>
                <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1">
                    Créez des moments d'exception dans
                    notre espace dédié aux événements au sein de l'hôtel. Doté d'une élégance contemporaine, notre lieu
                    offre
                    une toile parfaite pour des réunions d'affaires ...
                </p>
                <button type="button"
                    class="bg-lime-200 text-dark text-sm leading-6 font-medium py-2 px-3 rounded-lg mt-8"><a href="{{ route('espace_event') }}">See more</a></button>
            </div>

            <div class="basis-1/2">
                <div
                    class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                    <img src="images/v49_92.png" alt=""
                        class="w-full h-60 object-cover rounded-lg sm:h-80 sm:col-span-2 lg:col-span-full"
                        loading="lazy">

                </div>
            </div>

        </div>




        <div class="flex flex-row mt-9">
            <div class="basis-1/2">
                <div
                    class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                    <img src="images/v49_88.png" alt=""
                        class="w-full h-80 object-cover rounded-lg sm:h-80 sm:col-span-2 lg:col-span-full"
                        loading="lazy">

                </div>
            </div>


            <div class="basis-1/2 text-center px-8">
                <div
                    class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
                    <h1 class="font-serif text-lg  text-lime-600 font-bold">Restaurant</h1>

                </div>
                <p
                    class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1  hover:text-dark">
                    Explorez une symphonie de
                    saveurs dans notre restaurant d'hôtel, alliant cuisine exquise et élégance sans pareille. Une
                    expérience
                    culinaire inoubliable vous attend.
                </p>
                <button type="button"
                class="bg-lime-200 text-dark text-sm leading-6 font-medium py-2 px-3 rounded-lg mt-8"><a href="{{ route('restaurant') }}">See more</a></button>
            </div>
        </div>










        <div class="flex flex-row">
            <div class="basis-1/2 text-center px-8">
                <div
                    class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
                    <h1 class="font-serif text-lg  text-lime-600 font-bold">Rooms</h1>

                </div>
                <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1">
                    Plongez dans le luxe ultime et
                    l'élégance intemporelle de nos chambres d'hôtel. Des espaces soigneusement conçus qui allient
                    confort
                    moderne et charme sophistiqué.
                </p>
                <button type="button"
                class="bg-lime-200 text-dark text-sm leading-6 font-medium py-2 px-3 rounded-lg mt-8"><a href="{{ route('rooms') }}">See more</a></button>
            </div>



            <div class="basis-1/2">
                <div
                    class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                    <img src="images/v49_87.png" alt=""
                        class="w-full h-60 object-cover rounded-lg sm:h-80 sm:col-span-2 lg:col-span-full"
                        loading="lazy">

                </div>
            </div>

        </div>

    </div>


</body>

</html>
