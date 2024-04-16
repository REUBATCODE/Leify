<!DOCTYPE html>
<html lang="en">
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
<body>
@extends('layouts.app')

@section('content')
<!-- Aquí asumimos que ya tienes tu navbar y footer dentro de tu layout principal,
     si no es así, puedes incluirlos directamente así: -->
@include('components.header')
<div class="flex flex-col min-h-screen">
    <div class="flex-grow">
        <div class="container mx-auto px-4 py-6">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $song->name }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Detalles de la canción.
                    </p>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <!-- ... -->
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Si no están en tu layout principal -->
@include('components.footer')
@endsection

</body>
</html>