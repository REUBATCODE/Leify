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
            <form method="POST" action="{{route('profile.update', $user->id)}}" enctype="multipart/form-data" class="max-w-4xl mx-auto p-5">
                @csrf
            
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Imagen Actual:</label>
                    <img src="{{ asset($user->image) }}" alt="Imagen de Usuario" class="w-32 h-32 object-cover rounded-full mx-auto mb-3">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Ruta de la Imagen:</label>
                    <input type="text" name="image" class="form-control" placeholder="{{$user->image}}">
                </div>
            
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Confirmar Contraseña:</label>
                    <input type="password" id="password" name="" placeholder="Contraseña" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6">
                    <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">Bio:</label>
                    <input type="text" id="bio" name="bio" value="{{ $user->bio }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <input type="text" id="bio" name="role_id" value="{{ $user->role_id }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" hidden>
                </div>
            
                <div class="mb-6">
                    <label for="songs" class="block text-gray-700 text-sm font-bold mb-2 ">Canciones:</label>
                    <select name="song_id" id="songs" class="form-control">
                        @foreach($songs as $song)
                            <option value="{{ $song->id }}">{{ $song->name }}</option>
                        @endforeach
                    </select>
                </div>
            
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Actualizar
                </button>
            </form>
        @component('components.footer')
        @endcomponent
    </body>
</html>