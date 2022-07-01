<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::all();
        return response()->json($words);
    }

    public function getRandomWord($difficulty) {

        switch($difficulty) {
            case('easy'):
 
                $word = Word::whereRaw('LENGTH(name) < 5');
                break;
 
                case('hard'):
                $word = Word::whereRaw('LENGTH(name) > 7');
                break;

            default:
               $word = Word::whereRaw('LENGTH(name) > 4')->whereRaw('LENGTH(name) < 8');

        }
        $word = $word->inRandomOrder()->first();
        $theme = $word->theme;
        $result = [
            "name" => $word->name,
            "theme" => $theme->name
        ];
        return response()->json($result);
       
    }

    public function getDailyWord() {
        $word = Word::where('is_daily_word', '=', 1)->first();
        $theme = $word->theme;
        $result = [
            "name" => $word->name,
            "theme" => $theme->name
        ];
        return response()->json($result);
    }

    public function changeDailyWord(){
        // Remove all daily word
        $dailyword = Word::where('is_daily_word', '=', 1)->first();
        $dailyword->update(['is_daily_word' => 0]);

        // Setup new daily word
        $newdailyword = Word::whereRaw('LENGTH(name) > 4')->whereRaw('LENGTH(name) < 8')->inRandomOrder()->first();
        $newdailyword->update(['is_daily_word' => 1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        //
    }
}
