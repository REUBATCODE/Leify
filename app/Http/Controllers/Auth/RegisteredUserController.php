<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Role;
use App\Models\Song;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles = Role::all();
        $songs = Song::all();
        return view('auth.register', compact('roles', 'songs'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'], // Asegúrate de que la tabla se llame 'users'
            'password' => ['required', 'string', Rules\Password::defaults()],
            'image' => ['nullable', 'string', 'max:255'], // Asumiendo que es una URL o un path
            'bio' => ['nullable', 'string', 'max:255'],
            'role_id' => ['required', 'integer'], // Asegúrate de validar correctamente basado en tus necesidades
            'song_id' => ['required', 'string', 'max:255'], // Asegúrate de validar correctamente basado en tus necesidades
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $request->image, // Asegúrate de que este campo se maneje adecuadamente si es una carga de archivo
            'bio' => $request->bio,
            'role_id' => $request->role_id,
            'song_id' => $request->song_id,
        ]);
    
        // Asumiendo que tienes configurado el evento Registered y quieres dispararlo
        event(new Registered($user));
    
        return redirect(RouteServiceProvider::HOME);
    }
}
