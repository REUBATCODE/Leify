<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Role;
use App\Models\Song;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request,$id): View
    {
        $user = User::findOrFail($id);
        $songs = Song::all(); // Recuperar todas las canciones
        $roles = Role::all(); // Recuperar todos los roles
    
        return view('profile.edit', [
            'user' => $user,
            'songs' => $songs,
            'roles' => $roles,

        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);
        
        // Si vas a permitir la actualización del password, asegúrate de hashearlo:
        $validatedData = $request->validated();
        if (isset($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $user->fill($validatedData);

        if (array_key_exists('email', $validatedData)) {
            $user->email_verified_at = null;
        }

        $user->save();

        return redirect()->route('profile.edit', $id)->with('status', 'Profile updated successfully!');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function index(){
        $users = User::all();
        return view('artists.index', compact('users'));
    }
    public function view($id){
        $artist = User::findOrFail($id);
        return view('artists.view', compact('artist'));
    }
    public function updateArtist($id){
        $user = User::findOrFail($id);
        $roles = Role::all();
        $songs = Song::all();
        return view('artists.update', compact('roles','songs','user'));
    }
    public function createArtist(){
        $roles = Role::all();
        $songs = Song::all();
        return view('artists.create', compact('roles','songs'));
    }
    public function storeArtist(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image'=> 'required',
            'email' => 'required',
            'password' => 'required',
            'bio' => 'required',
            'role_id' => 'required',
            'song_id' => 'required',
        ],[
            'name.required' => 'Name is required',
            'image.required' => 'Image is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'bio.required' => 'Bio is required',
            'role_id.required' => 'Role is required',
            'song_id.required' => 'Song is required',
        ]);
        $user = User::create([
            'name' => $validated['name'],
            'image' => $validated['image'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'bio' => $validated['bio'],
            'role_id' => $validated['role_id'],
            'song_id' => $validated['song_id'],
        ]);
        if($user){
            return redirect()->route('artists.list')->with('success','Artist created successfully');
        }
        else{
            return redirect()->route('artists.create')->with('error','Artist creation failed');
        }

    }
}
