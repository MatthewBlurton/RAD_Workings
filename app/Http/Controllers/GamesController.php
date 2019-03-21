<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index',
            compact('games'));
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('games.show',
            compact('game'));
    }
}
