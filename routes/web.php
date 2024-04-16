<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Songs routes
Route::prefix('/songs')->group(function () {
    Route::get('/', [SongController::class, 'index'])->name('songs.list');
    Route::get('/view/{id}', [SongController::class, 'view'])->name('songs.view');
    Route::delete('/delete/{id}', [SongController::class, 'delete'])->name('songs.delete');
});

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');




require __DIR__.'/auth.php';
