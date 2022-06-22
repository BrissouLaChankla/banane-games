<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MentionsController extends Controller
{
    public function showMentions() {
        return view('mentions.index');
    }

    public function showChartes() {
        return view('chartes.index');
    }

    public function showCvgCvu() {
    return view('cvg-cvu.index');
    }
}
