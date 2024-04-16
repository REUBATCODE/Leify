<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrar</title>

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
            <div class="container mx-auto px-4">
                <form method="POST" action="{{ route('artists.store') }}" class="mt-8 max-w-md mx-auto">
                    @csrf
                    <div class="space-y-4">
                        <h1 class="text-center text-4xl">Registrarse</h1>
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input id="name" name="name" type="text" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('name') }}</p>
                        </div>
                        <div>
                            <label for="">Image</label>
                            <input type="text" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="URL the image">
                            @if ($errors->has('image'))
                                <p class="mt-2 text-sm text-red-600">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input id="email" name="email" type="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('email') }}</p>
                        </div>
                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input id="password" name="password" type="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('password') }}</p>
                        </div>
                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('password_confirmation') }}</p>
                        </div>
                        <div>
                            <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                            <textarea id="bio" name="bio" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('bio') }}</p>
                        </div>
                        <div>
                            <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                            <select id="role" name="role_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('role') }}</p>
                        </div>
                        <div>
                            <label for="song_id">Song</label>
                            <select id="song_id" name="song_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @foreach ($songs as $song)
                                    <option value="{{$song->id}}">{{$song->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Register
                            </button>
                        </div>
                </form>        
            </div> 
        @component('components.footer')
        @endcomponent
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const form = document.querySelector("form");

                function validatePasswords(event) {
                    const password = document.getElementById("password").value;
                    const confirmPassword = document.getElementById("password_confirmation").value;

                    if(password !== confirmPassword) {
                        event.preventDefault(); // Prevent form from submitting
                        alert("Las contraseñas no coinciden."); // Error message
                    }
                }

                form.addEventListener("submit", validatePasswords);
            });
        </script>
    </body>
</html>
