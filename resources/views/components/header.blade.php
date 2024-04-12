<header class="bg-yellow-500">
  <div class="flex items-center justify-between px-4 py-2">
    <!-- Búsqueda a la izquierda -->
    <input type="text" placeholder="Busca letras y más" class="px-5 py-2 border-2 border-gray-300 focus:border-gray-500 outline-none flex-none">

    <!-- Logo en el centro (ajustamos el contenedor para que crezca pero con justify-center para centrar el logo) -->
    <div class="flex-grow flex justify-center items-center">
      <a href="{{ route('landing') }}">
        <img src="{{ asset('leify.png') }}" alt="LEIFY Logo" class="h-8">
      </a>
    </div>
    
    <!-- Usuario logueado a la derecha -->
    <div class="flex items-center space-x-2 flex-none">
      @guest
        @if (Route::has('login'))
          <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">INICIAR SESIÓN</a>
          <span class="text-gray-500">|</span>
        @endif
        @if (Route::has('register'))
          <a href="{{ route('register' )}}" class="text-gray-700 hover:text-gray-900">REGISTRARSE</a>
        @endif
      @else
        <div class="relative">
          <button class="flex items-center space-x-2 focus:outline-none" onclick="toggleMenu()">
            <img src="{{ $user->image }}" alt="User Avatar" class="h-8 w-8 rounded-full">
            <span class="text-gray-700 hover:text-gray-900">{{ Auth::user()->name }}</span>
          </button>
          <div id = "menuDesplegable" class="hidden absolute right-0 mt-2 py-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg" >
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900">Dashboard</a>
            <a href="{{ route('profile.edit',$user) }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900">Perfil Editar</a>
            <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 hover:text-gray-900" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
              @csrf
            </form>
          </div>
        </div>
      @endguest
    </div>
  </div>
    
    <nav class="bg-black">
        <div class="flex justify-center items-center py-2">
          <div class="menu space-x-4 flex items-center">
            <a href="#" class="text-white hover:text-gray-200">DESTACADO</a>
            <span class="text-gray-500">|</span>
            <a href="{{route('songs.list')}}" class="text-white hover:text-gray-200">CANCIONES</a>
            <span class="text-gray-500">|</span>
            <a href="{{route('albums.list')}}" class="text-white hover:text-gray-200">ALBUMES</a>
            <span class="text-gray-500">|</span>
            <a href="{{route('artists.list')}}" class="text-white hover:text-gray-200">ARTISTAS</a>
            <span class="text-gray-500">|</span>
            <a href="#" class="text-white hover:text-gray-200"> <i class="fab fa-facebook-f"></i> </a>
            <span class="text-gray-500">|</span>
            <a href="#" class="text-white hover:text-gray-200"> <i class="fab fa-twitter"></i> </a>
            <span class="text-gray-500">|</span>
            <a href="#" class="text-white hover:text-gray-200"> <i class="fab fa-instagram"></i> </a>
        </div>
        </div>
    </nav>              
</header>
<script>
  function toggleMenu() {
  var menuDesplegable = document.getElementById("menuDesplegable");
  if (menuDesplegable.classList.contains("hidden")) {
    menuDesplegable.classList.remove("hidden"); // Si está oculto, mostrarlo.
  } else {
    menuDesplegable.classList.add("hidden"); // Si no está oculto, ocultarlo.
  }
}
</script>