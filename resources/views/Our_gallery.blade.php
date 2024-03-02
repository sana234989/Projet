<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Supprimez ces lignes -->
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <title>Our Gallery</title>
</head>

<body class="flex flex-col items-center justify-center min-h-screen">

    <div class="navbar py-4 px-4">
        @include('navbar')
    </div>

    <div class=" w-full max-w-4xl mt-8 px-4">
        <div id="custom-controls-gallery" class=" relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

                <?php
                $images = [
                asset('image/slide10.jpg'),
                asset('image/slide11.jpg'),
                asset('image/slide9.jpg'),
                asset('image/delux room.jpg'),
                asset('image/royal.jpg'),
                asset('image/voisine5.jpg'),
                asset('image/soin1.jpg'),
                asset('image/slide12.jpg')
                ];
                ?>
                @foreach ($images as $image)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ $image }}"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="">
                    </div>
                @endforeach

            </div>
            <div class="flex justify-center items-center pt-4">
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2  left-1/2 space-x-3 rtl:space-x-reverse">
                    @for ($i = 0; $i < count($images); $i++)
                        <button type="button" class="w-3 h-3 rounded-full"
                            aria-current="{{ $i === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i + 1 }}"
                            data-carousel-slide-to="{{ $i }}"></button>
                    @endfor
                </div>

                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

    </div>
</body>

</html>
