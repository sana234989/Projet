<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

    <title>Contact</title>
</head>

<body>
    

    <div class="navbar">
        @include('navbar')
    </div>
    <section class="text-gray-600 body-font relative bg-gray-100 ">
        <div class="container px-5 py-24 mx-auto flex justify-center items-center h-full"> 
        <div class=" md:w-1/2 bg-white rounded-lg p-8 flex flex-col  w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">let's talk.</p>
            </div>
            {{-- @if (session()->has('success'))
          <div class="alert alert-success mt-4 ml-4 mr-4 col-4 text-green-600" role="alert">
              {{session('success')}}
            </div>
            @endif --}}

            @if (session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 ml-4 mr-4 col-4"
                    role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="post">
                @csrf
                <div class="">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>

                            @error('name')
                            <span class="text-red-500">{{ $message }}</span>                                
                            @enderror
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('email')
                            <span class="text-red-500">{{ $message }}</span>                                
                            @enderror
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                            @error('message')
                            <span class="text-red-500">{{ $message }}</span>                                
                            @enderror
                        </div>
                        <div class="p-2 w-full flex items-center justify-center mt-4">
                            <x-button
                                class="ms-4 bg-orange-700 hover:bg-orange-600 focus:bg-orange-600 active:bg-orange-600 text-black font-bold px-10 py-2">
                                Send
                            </x-button>
                        </div>
                        {{-- <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <a class="text-indigo-500">example@email.com</a>
                            <p class="leading-normal my-5">49 Smith St.
                                <br>Saint Cloud, MN 56301
                            </p>
                            <span class="inline-flex">
                                <a class="text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                </a>
                                <a class="ml-4 text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                        </path>
                                    </svg>
                                </a>
                                <a class="ml-4 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                        </rect>
                                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                </a>
                                <a class="ml-4 text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div> --}}
                    </div>
                </div>

            </form>
        </div>
        </div>
    </section>

</body>

</html>
