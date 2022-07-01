<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MentionsController extends Controller
{
    public function showMentions() {
        return view('mentions-legales.mentions.index');
    }

    public function showChartes() {
        return view('mentions-legales.chartes.index');
    }

    public function showCvgCvu() {
    return view('mentions-legales.cvg-cvu.index');
    }
}
