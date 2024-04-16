<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Leify</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-yellow-50 text-gray-800">
    @component('components.header')
    @endcomponent
    <main class="">
        <div class="flex w-full h-full bg-fixed justify-evenly bg-center bg-no-repeat bg-[url('https://m.media-amazon.com/images/I/6113DHPqk7L._UF1000,1000_QL80_.jpg')] bg-gray-700 bg-blend-multiply sm:min-h-96">
            <div class="flex">
                <div class="lg:h-96 lg:w-96 md:h-74 md:w-74 sm:h-64 sm:w-64 h-40 w-40 bg-slate-100 ml-2 mt-4 mb-10">
                    <img class="bg-cover h-full"
                        src="https://m.media-amazon.com/images/I/6113DHPqk7L._UF1000,1000_QL80_.jpg" alt="">
                </div>
                <div class="flex-col ml-6 mt-9">
                    <p class="mb-3 text-yellow-500 font-semibold">ALBUM</p>
                    <h1 class="text-lg sm:text-2xl md:text-5xl lg:text-7xl text-white font-bold mb-3">Ride the Lightning </h1>
                    <p class="mb-3 text-white"><a href="">Mettallica</a></p>
                    <span class="mb-3 text-white">Released July 27, 1984 </span>
                </div>
            </div>
            <div class="flex w-70 mt-9">
                <span>vistas</span>
            </div>
        </div>
        <div class="flex flex-wrap justify-evenly">
            <div class="flex-col mt-20 mb-20 p-15 w-96">
                <span class="">ALBUM TRACK LIST</span>
                <div class="sm: p-2">
                    <ul class="divide-y divide-gray-300 dark:divide-gray-700 list-inside">
                        <li class="pb-3 sm:pb-4">
                            <a href="">
                                <p class="text-2xl font-semibold">Name</p>
                            </a>
                        </li>
                        <li class="pb-3 sm:pb-4">
                            <a href="">
                                <p class="text-2xl font-semibold">Name</p>
                            </a>
                        </li>
                        <li class="pb-3 sm:pb-4">
                            <a href="">
                                <p class="text-2xl font-semibold">Name</p>
                            </a>
                        </li>
                        <li class="pb-3 sm:pb-4">
                            <a href="">
                                <p class="text-2xl font-semibold">Name</p>
                            </a>
                        </li>
                        <li class="pb-3 sm:pb-4">
                            <a href="">
                                <p class="text-2xl font-semibold">Name</p>
                            </a>
                        </li>
                        <li class="pb-3 sm:pb-4">
                            <a href="">
                                <p class="text-2xl font-semibold">Name</p>
                            </a>
                        </li>
                        <li class="pb-3 sm:pb-4">
                            <a href="">
                                <p class="text-2xl font-semibold">Name</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex-col mt-20 mb-20 w-60 p-2">
                <h3 class="text-3xl font-semibold">About</h3>
                <p class="text text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora dolore
                    quis dignissimos reiciendis excepturi in magnam odit aperiam, voluptatibus assumenda, neque
                    perferendis id voluptatum ad sint suscipit! Et, maiores placeat?w</p>
            </div>
        </div>
    </main>


    @component('components.footer')
    @endcomponent
</body>

</html>
