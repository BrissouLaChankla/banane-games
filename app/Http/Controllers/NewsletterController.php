<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Validator;

class NewsletterController extends Controller
{
    public function AddEmailNewsletter(Request $request) {
        $request->merge(['has_opted_in' => 1]);

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:App\Models\Newsletter,email|max:255|email:rfc,dns'
        ]);
        
        if ($validator->fails()) {
            return redirect(url()->previous() . '#footer')->withErrors($validator)->withInput();
        } else {
            // Only happening when there is a new subscriber
            $newsletter = Newsletter::create($request->all());
            return  redirect(url()->previous().'#footer')->with('newsletter-success', 'Vous êtes bien enregistré dans notre Newsletter. Bienvenue ! 🎉');
        }
    }
}
