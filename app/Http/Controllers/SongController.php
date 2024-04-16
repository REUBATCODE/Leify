<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(){
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }
    public function view($id)
    {
    $song = Song::find($id);
    return view('songs.view', compact('song'));
    }

}
