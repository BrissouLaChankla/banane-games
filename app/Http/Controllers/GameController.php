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

    


    // CRUD 

    public function showAll(){

        $games = Game::all();
        
        return view('admin.games.all')->with([
            'games' => $games  
        ]);

    }

    public function deleteGame($id){
        
        $game = Game::find($id);

        $game->delete();

    }

    public function showEdit($slug){
        
        $game = Game::where('slug', $slug)->first();
        
        return view('admin.games.edit')->with([
            'game' => $game
        ]);


    }

    public function postEditCreateGame(Request $request){
        
        $game = Game::find($request->id);

        $game->update($request->all());

        


    }


}
