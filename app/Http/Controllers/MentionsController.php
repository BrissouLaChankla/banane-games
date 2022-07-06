<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MentionsController extends Controller
{
    public function showMentions() {
        return view('mentions-legales.mentions');
    }

    public function showChartes() {
        return view('mentions-legales.chartes');
    }

    public function showCgv() {
    return view('mentions-legales.cgv');
    }
}
