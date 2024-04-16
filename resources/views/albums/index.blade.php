<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vista Artistas</title>

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
    <main>
        <div class="dark:bg-gray-800 p-5">
            <h1 class=" text-2xl sm:text-6xl font-bold  text-gray-900 whitespace-nowrap dark:text-white">Todos los Albums</h1>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:max-w-full">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            imagen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            producida
                        </th>
                        <th scope="col" class="px-6 py-3">
                            fecha
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Ver</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($albums as $album)                        
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            <img class="w-16 md:w-32 max-w-full max-h-full" src="{{$album->image}}">
                        </td>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$album->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$album->produced}}
                        </td>
                        <td class="px-6 py-4">
                            {{$album->date}}
                        </td>
                        <td class="px-6 py-4">
                            <a class="" href="">ver</a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
    @component('components.footer')
    @endcomponent
</body>

</html>
