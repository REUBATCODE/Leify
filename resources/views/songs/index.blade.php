<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vista Canciones</title>

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
            <section class="container mx-auto px-4">
              <h1 class="text-3xl font-bold text-center mt-12 mb-4">Canciones</h1>
              <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-3 py-3">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="py-3 px-6">
                                Título
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Letra
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($songs as $song)
                        <tr class="text-center bg-white border-b  dark:border-gray-700">
                            <td>{{$song->name}}</td>    
                            <td>{{$song->lyric}}</td>
                            <td>
                                <a class="text-white bg-yellow-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-yellow-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800" href="{{ route('songs.view', $song) }}">Ver</a>
                                <a class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-red-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800" href="{{ route('songs.view', $song) }}">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </section>
          </main>
        @component('components.footer')
        @endcomponent
    </body>
</html>