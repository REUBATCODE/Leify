<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>
    <div id = "navar-uno" class="w-full h-100 bg-yellow-300">
        <div class="container mx-auto px-4 sm:px-0">
            <nav class="flex flex-col sm:flex-row justify-between items-center">
                <input type="search" placeholder="Buscar..." class="px-2 py-1 mb-2 sm:mb-0">
                <h1 class="text-4xl font-bold">Leify</h1>
                <button id="menu-button" class="sm:hidden focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div id="menu" class="hidden sm:flex space-x-4">
                    <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                    <a href="{{ route('register') }}" class="text-blue-500">Register</a>
                </div>
            </nav>
        </div>
    </div>
    <div id= "navarOpciones" class="h-3 mb-3">
        <nav class="flex sm:justify-center space-x-4 bg-black">
            <ul class="text-1xl list-none p-0 flex space-x-5">
                <li>
                    <a href="#" class="text-white">Home</a>
                </li>
                <li>
                    <a href="#" class="text-white">Album</a>
                </li>
                <li>
                    <a href="#" class="text-white">Songs</a>
                </li>
                <li>
                    <a href="#" class="text-white">Social Media</a>
                </li>
            </ul>
        </nav>
    </div>
    <div id="imagenFondo" class="bg-cover bg-center mt-3" style="background-color: black;">
        <div class="container px-4 sm:px-0">
            <div class="flex flex-col sm:flex-row justify-center space-x-4">
                <img class="rounded-3xl w-40 h-50 object-cover mb-4"
                    src="https://indierocks.sfo3.cdn.digitaloceanspaces.com/wp-content/uploads/bfi_thumb/Eminem_2023-348z5adr91clhqpgzno1ngnyizdhrf31tjsj6ekrgsuml5vu6ep86lvrswee68.png"
                    alt="">
                <div class="text-yellow-400 mt-3 text-center flex flex-col justify-center">
                    <div>
                        <h1 class="text-5xl font-bold text-center">Eminem</h1>
                        <p class="text-center text-2xl">The best rapper in the world</p>
                    </div>
                    <ul class="list-none flex justify-center space-x-4 mt-5">
                        <li><a href="#" class="text-1xl text-white">Canciones</a></li>
                        <li><a href="#" class="text-1xl text-white">Album</a></li>
                        <li><a href="#" class="text-1xl text-white">Social Media</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto flex flex-col sm:flex-row">
        <div class="flex-1">
            <h2 class="text-2xl text-center font-bold mb-2">Bibliografía</h2>
            <p class="text-justify mx-2">Eminem es el nombre artístico de Marshall Bruce Mathers, nacido en Kansas City
                el 17 de octubre de 1973. El nombre de Eminem proviene de la unión de ambas iniciales, M&M, pronunciada
                en inglés. Su infancia no fue fácil. Creció en ausencia del padre, quien abandonó el hogar cuando él
                tenía seis meses, y al cual rehusó conocer una vez alcanzada la celebridad. Vivió en varios estados con
                su madre, Deborah Mathers-Briggs, hasta que se instalaron en los suburbios de Detroit (Michigan), cuando
                él contaba doce años.</p>
        </div>
        <div class="flex-1 flex justify-center">
            <div class="w-full">
                <h2 class="text-2xl text-center font-bold mb-2">Canciones</h2>
                <table class="table-auto w-full">
                    <thead>
                        <tr class="text-center">
                            <th class="px-4 py-2" colspan="2">Canción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Nombre Canción 1</td>
                            <td class="border px-4 py-2">Nombre de la Canción 2</td>
                        </tr>
                        <!-- Agregen más canciones -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <h2 class="text-2xl text-center font-bold mb-2">Albums</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-gray-300 p-4">
                <a href="#">
                    <img class="w-full h-40 object-cover"
                        src="https://indierocks.sfo3.cdn.digitaloceanspaces.com/wp-content/uploads/bfi_thumb/Eminem_2023-348z5adr91clhqpgzno1ngnyizdhrf31tjsj6ekrgsuml5vu6ep86lvrswee68.png"
                        alt="">
                    <h3 class="text-center text-1xl font-bold mt-2">Album 1</h3>
                </a>
            </div>
            <div class="bg-gray-300 p-4">
                <a href="#">
                    <img class="w-full h-40 object-cover"
                        src="https://indierocks.sfo3.cdn.digitaloceanspaces.com/wp-content/uploads/bfi_thumb/Eminem_2023-348z5adr91clhqpgzno1ngnyizdhrf31tjsj6ekrgsuml5vu6ep86lvrswee68.png"
                        alt="">
                    <h3 class="text-center text-1xl font-bold mt-2">Album 1</h3>
                </a>
            </div>
            <div class="bg-gray-300 p-4">
                <a href="#">
                    <img class="w-full h-40 object-cover"
                        src="https://indierocks.sfo3.cdn.digitaloceanspaces.com/wp-content/uploads/bfi_thumb/Eminem_2023-348z5adr91clhqpgzno1ngnyizdhrf31tjsj6ekrgsuml5vu6ep86lvrswee68.png"
                        alt="">
                    <h3 class="text-center text-xl font-bold mt-2">Album 1</h3>
                </a>
            </div>
            <div class="bg-gray-300 p-4">
                <a href="#">
                    <img class="w-full h-40 object-cover"
                        src="https://indierocks.sfo3.cdn.digitaloceanspaces.com/wp-content/uploads/bfi_thumb/Eminem_2023-348z5adr91clhqpgzno1ngnyizdhrf31tjsj6ekrgsuml5vu6ep86lvrswee68.png"
                        alt="">
                    <h3 class="text-center text-1xl font-bold mt-2">Album 1</h3>
                </a>
            </div>
            <!-- Agregen más albums -->
        </div>
    </div>
    <div class="mt-3 py-4 bg-yellow-600">
        <h2 class="text-1xl text-center font-bold mb-2">Social Media</h2>
        <div class="flex justify-center space-x-12">
            <a href="#" class="text-2xl text-black">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="text-2xl text-black">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-2xl text-black">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-2xl text-black">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>

</body>

</html>
