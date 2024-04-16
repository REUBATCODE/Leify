<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    // Method to handle viewing a specific song
    public function view($id)
    {
        $song = Song::findOrFail($id);
        return view('songs.view', compact('song'));
    }

    // Method to handle deletion of a song
    public function delete($id)
    {
        $song = Song::findOrFail($id);
        $song->delete();

        // Redirect to the list of songs with a success message
        return Redirect::route('songs.list')->with('success', 'Song deleted successfully.');
    }
}
