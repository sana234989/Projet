<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <link rel="stylesheet" href="{{ asset('style8.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="bg-blue-900 py-8 sm:py-12 lg:py-24 xl:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-12 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
                <h2 class="title text-center text-white text-3xl font-bold tracking-tight sm:text-4xl">Meet our <span class="text-indigo-600">leadership</span></h2>
            </div>
            <div class="grid gap-8 sm:grid-cols-2 xl:col-span-2">
                @foreach($per as $key=>$employe)
                <div class="card flex flex-col items-center"id="card{{$key+1}}">
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="{{asset($employe->img)}}" alt="">
                        <div class="card-container">
                            <h3 class="text1 text-center">Hi, I'm {{$employe->nom}} {{$employe->prenom}}<span class="block text-sm font-semibold leading-6 text-indigo-600">{{$employe->fonction}}</span></h3>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">{{$employe->descripost}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>
</html>