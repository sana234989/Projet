<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Supprimez ces lignes -->
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <title>Document</title>
</head>

<body>

    <header>
        <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img class=" h-6 sm:h-9 " src="{{ asset('image/logo.png') }}" alt="Your Company" />

                </a>
                <div class="flex items-center lg:order-2">

                    @if (Route::has('login'))
                        <div class="">
                            @if (Auth::check())
                                {{-- {{ Auth::user()->name }}
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">
                                    Log Out
                                </button>
                            </form> --}}

                                <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation"
                                    class="text-white  focus:outline-none font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center"
                                    type="button">
                                    <span
                                        class="text-white bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-9 lg:px-8 py-2 lg:py-2.5 mr-2">
                                        {{ Auth::user()->name }}
                                    </span>
                                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                {{-- <div x-data="{ open: false }" class="relative">
                                <!-- Trigger -->
                                <button @click="open = !open" class="flex items-center text-gray-700 hover:text-gray-900 focus:outline-none">
                                    <span  class="text-white bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 lg:px-5 py-2 lg:py-2.5 mr-2">
                                        {{ Auth::user()->name }}</span>
                                    
                                </button> --}}

                                <!-- Dropdown menu -->
                                <div id="dropdownInformation"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <!-- User information -->
                                    <div class="px-4 py-3 text-sm text-gray-900">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                                    </div>

                                    <!-- Logout link -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <ul class="py-2 text-sm text-gray-700 "
                                            aria-labelledby="dropdownInformationButton">
                                            <li>
                                                <a href="{{ route('profile.show') }}"
                                                    class="block px-4 py-2 hover:bg-gray-100 ">Profile</a>
                                            </li>

                                        </ul>
                                        <button type="submit"
                                            class="block w-full text-left py-2 px-4 text-gray-700 hover:bg-gray-100">
                                            Log Out
                                        </button>
                                    </form>
                                </div>



                                {{-- <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form> --}}
                                {{-- <a href="{{ url('/dashboard') }}" class="text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">Dashboard</a> --}}
                                {{-- @include('navigation-menu')  --}}
                            @else
                                <a href ="{{ route('login') }}"
                                    class="text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2  focus:outline-none ">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 pr-4 pl-3 text-gray 700  rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 md:hover:text-amber-600 {{ request()->is('home') ? 'md:text-amber-700' : 'md:text-amber-700' }} "
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 md:hover:text-amber-600 {{ request()->is('#') ? 'md:text-amber-700' : '' }}  ">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 md:hover:text-amber-600 {{ request()->is('#') ? 'md:text-amber-700' : '' }} ">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('gallary') }}"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 md:hover:text-amber-600{{ request()->is('gallary') ? 'md:text-amber-700' : '' }}  ">Our
                                Gallery</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 md:hover:text-amber-600 {{ request()->is('#') ? 'md:text-amber-700' : '' }} ">Reservation</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('contact.show') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 md:hover:text-amber-600 {{ request()->is('contact') ? 'md:text-amber-700' : '' }}  ">Contact
                            Us</a>
                        </li> --}}
                        
                            @if(Auth::check())
                            <a href="{{ route('contact.show') }}"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 md:hover:text-amber-600 {{ request()->is('contact') ? 'md:text-amber-700' : '' }}  ">Contact
                                Us</a>
                            @else
                                <a href ="{{ route('login') }}"
                                    class= "block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 md:hover:text-amber-600 {{ request()->is('contact') ? 'md:text-amber-700' : '' }}  ">Contact
                                </a>
                            @endif
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>
