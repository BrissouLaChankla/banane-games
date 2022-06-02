<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function showGame($slug) {
        $game = Game::where('slug', $slug)->first();
        $others = Game::whereNot('slug', $slug)->orderBy('is_available', 'DESC')->get()->take(3);
        
        return view('games.index')->with([
            'game' => $game,
            'others' => $others
        ]);
    }
}
