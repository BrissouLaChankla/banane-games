<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\GamePicture;
use Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


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

    public function showCreate() {
        return view('admin.games.create');
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

    public function postEditCreateGame(Request $request) {
        $validator = Validator::make($request->all(), [
            'img_url' => 'image|mimes:jpeg,png,jpg,gif,webp',
            'title' => 'required|string|min:3|max:255',
            'matiere' => 'required|string|min:3|max:255',
            'short_description' => 'required|string|min:3|max:255',
            'link' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3'
        ]);
        
        if ($validator->fails()) {
            return redirect(url()->previous())->withErrors($validator)->withInput();
        } else {

        // génère le slug
        $request->merge(['slug' => Str::slug($request->title, '-')]);

        // Détect l'état du switch
        if($request->is_available) {
            $request->merge(['is_available' => 1]);
        } else {
            $request->merge(['is_available' => 0]);
        }


       
        }
        
        
        // Détect si une image a été upload 
        if($request->hasFile('img_url')){
            $nameImg = "Nanagames-".Str::slug($request->title, '-').".webp";
            $destinationPath = public_path('img/games/thumb/'.$nameImg);

            // = Create the Image Object
            $image = Image::make($request->file('img_url'));
        
            // Crop and save 
            $image->resize(636, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 100)->save($destinationPath);

            $request->merge(["thumbnail_img_url" => 'img/games/thumb/'.$nameImg]);
        }
    
        // Save Database Info
        
        if($request->id) {
            $game = Game::find($request->id);
            $game->update($request->all());
        } else {
            $game = Game::create($request->all());
        }

         // Détect si un ou des screens ont été upload 
         if($request->hasFile('img_attached')){
            foreach($request->img_attached as $screen) {

                $nameScreen = "Screen-".Str::slug($request->matiere, '-')."_".uniqid().".webp";
                $destinationPath = public_path('img/games/screens/'.$nameScreen);
                
                // = Create the Image Object
                $image = Image::make($screen);
            
                // Crop and save 
                $image->resize(1400, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode('webp', 100)->save($destinationPath);
    
                $gamePicture = GamePicture::create([
                    "img_url" => 'img/games/screens/'.$nameScreen,
                    "game_id" => $game->id,
                ]);

            }

        
        }
        return redirect()->route('show-all-games');
}

public function deleteScreen($id) {
    $screen = GamePicture::find($id);

    if(\File::exists(public_path($screen->img_url))){
        \File::delete(public_path($screen->img_url));
        }else{
            dd('Image introuvable, contactez l\'admin !');
        }
    $screen->delete();
}
    


}
