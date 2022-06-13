<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Models\Theme;

use Illuminate\Http\Request;

class WordController extends Controller
{

    public function showWords() {
        $themes = Theme::get();
        return view('modules.words')->with([
            'themes' => $themes
        ]);
    }
}
