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
        <div id="imagenFondo" class="bg-cover bg-center mb-3 py-3" style="background-color: white;">
            <div class="container px-4 sm:px-0">
                <div class="flex flex-col sm:flex-row justify-center space-x-4">
                    <img class="rounded-3xl w-40 h-50 object-cover mb-4"
                        src="{{ asset($artist->image)}}"
                        alt="">
                    <div class="text-yellow-400 mt-3 text-center flex flex-col justify-center">
                        <div>
                            <div class="flex items-center justify-between mb-3">

                                <h1 class="text-5xl font-bold">{{$artist->name}}</h1>
                            </div>                            
                            <p class="text-left text-2xl">
                                El Mejor 
                                @foreach ($artist->roles->unique('name') as $role) 
                                    @if ($role->name == 'SUPERADMINISTRADOR')
                                        Superadministrador
                                    @elseif ($role->name == 'ADMINISTRADOR')
                                        Administrador
                                    @elseif ($role->name == 'ARTISTA')
                                        Artista
                                    @elseif ($role->name == 'USUARIO')
                                        Usuario
                                    @endif
                                @endforeach
                            </p>
                        </div>
                        <ul class="list-none flex space-x-4 mt-5">
                            <li><a href="#canciones" class="text-1xl text-black">Canciones</a></li>
                            <li><a href="#albums" class="text-1xl text-black">Album</a></li>
                            <li><a href="#" class="text-1xl text-black">Social Media</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section id = "bibliografia">
            <div class="container mx-auto flex flex-col sm:flex-row">
                <div class="flex-1">
                    <h2 class="text-2xl text-center font-bold mb-2">Bibliografía</h2>
                    <p class="text-justify mx-2">{{$artist->bio}}</p>
                </div>
                <section id = "canciones">
                    <div class="flex-1 flex justify-center">
                        <div class="w-full">
                            <h2 class="text-2xl text-center font-bold mb-2">Canciones</h2>
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Nombres</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <ul style="columns: 2;">
                                                @foreach ($artist->songs as $song)
                                                    <li>{{$song->name}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <!-- Agregen más canciones -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <hr class="py-3 mt-5">
        <section id = "albums" class="">
            <div class="container mx-auto">
                <h2 class="text-2xl text-center font-bold mb-2">Albums</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    @foreach ($artist->albums as $album)
                        <div class="bg-gray-300 p-3 mb-5 mt-2">
                            <a href="#">
                                <img class="w-full h-40 object-cover"
                                    src="{{ asset($album->image)}}"
                                    alt="">
                                <h3 class="text-center text-1xl font-bold mt-2">{{$album->name}}</h3>
                                <a id="viewAlbum" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex-auto" href="#">Ver Más</a>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @component('components.footer')
        @endcomponent
    </body>
</html>