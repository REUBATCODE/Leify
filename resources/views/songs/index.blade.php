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
<body class="font-sans bg-yellow-50 from-blue-100 to-indigo-100 text-gray-800">
    @component('components.header')
    @endcomponent
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow">
            <main>
                <section class="container mx-auto px-4 py-6">
                    <h1 class="text-4xl font-bold text-center text-gray-700 mb-6">Canciones</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($songs as $song)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-6">
                                <h2 class="text-lg font-bold mb-2">{{$song->name}}</h2>
                                <p class="text-gray-700 text-base mb-4">
                                    {{$song->lyric}}
                                </p>
                                <div class="flex items-center justify-center mt-4">
                                    <a href="{{ route('songs.view', $song) }}" class="text-white bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-5 py-2 inline-flex items-center">
                                        <i class="fas fa-eye mr-2"></i>Ver
                                    </a>
                                    <!-- Inicio del formulario para eliminar -->
                                    <form action="{{ route('songs.delete', $song->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white bg-red-500 hover:bg-red-600 rounded-lg shadow px-5 py-2 inline-flex items-center ml-4">
                                            <i class="fas fa-trash-alt mr-2"></i>Eliminar
                                        </button>
                                    </form>
                                    <!-- Fin del formulario para eliminar -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </main>
        </div>
    </div>
    @component('components.footer')
    @endcomponent
</body>
</html>
