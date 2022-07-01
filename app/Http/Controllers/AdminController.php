<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function showAdmins() {

        $admins = User::all();
        return view('admins.index')->with([
            'admins' => $admins
            
        ]);

    }

    public function deleteAdmin($id){
        $admins = User::find($id);
        $admins->delete();
    }


}   


