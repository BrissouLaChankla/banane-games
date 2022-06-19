<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class AboutController extends Controller
{
    //
    public function showAbout() {
        $members = Member::all();
        return view('about.index')->with([
            'members' => $members
        ]);
    }
}
