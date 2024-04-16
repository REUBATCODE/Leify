<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Landing page
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/artists', [ArtistController::class, 'index'])->name('artists.list');



Route::prefix('/albums')->group(function () {
    Route::get('/', [AlbumController::class, 'index'])->name('albums.list');
    Route::get('/view/{id}', [AlbumController::class, 'view'])->name('albums.view');

});

// Artists routes
Route::prefix('/artists')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('artists.list');
    Route::get('/view/{id}', [ProfileController::class, 'view'])->name('artists.view');
    Route::get('/update/{id}', [ProfileController::class, 'updateArtist'])->name('artists.update');
    Route::get('/delete/{id}', [ProfileController::class, 'deleteArtist'])->name('artists.delete');
    Route::get('/create', [ProfileController::class, 'createArtist'])->name('artists.create');
    Route::post('/create', [ProfileController::class, 'storeArtist'])->name('artists.store');
});

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Songs routes en el issue63-us
Route::prefix('/songs')->group(function () {
    Route::get('/', [SongController::class, 'index'])->name('songs.list');
    Route::get('/view/{id}', [SongController::class, 'view'])->name('songs.view');
});

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');




require __DIR__.'/auth.php';
