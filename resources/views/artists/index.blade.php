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
            <section class="container mx-auto px-4">
              <h1 class="text-3xl font-bold text-center mt-12 mb-4">Artistas</h1>
              <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-3 py-3">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="py-3 px-6">
                                Id
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nombre
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Imagen
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Rol
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Bibliografía
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $artist)
                        <tr class="text-center bg-white border-b  dark:border-gray-700">
                            <td>{{$artist->id}}</td>    
                            <td>{{$artist->name}}</td>    
                            <td><img src="{{$artist->image}}" alt="" class="w-20 h-20 object-cover rounded"></td>                 
                            <td>{{$artist->role_id}}</td>
                            <td>{{$artist->bio}}</td>
                            <td>
                                <a class="text-white bg-yellow-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-yellow-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800" href="{{ route('artists.view', $artist) }}">Ver</a>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Repite las filas según sea necesario -->
                    </tbody>
                </table>
            </div>
            
            </section>
          </main>
        @component('components.footer')
        @endcomponent
    </body>
</html>