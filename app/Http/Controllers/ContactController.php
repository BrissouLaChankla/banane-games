<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Validator;
use Mail;
use File;

class ContactController extends Controller
{
    public function showContact() {
        return view('contact.index');
    }

    public function sendMail(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255|email:rfc,dns',
            'content' => 'required|min:3',
            'pj.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        
        if ($validator->fails()) {
            // if any error
            return redirect(url()->previous())->withErrors($validator)->withInput();
        } else {

            if ($request->pj) {
                $mailData = [
                    'email' => $request->email,
                    'body' => $request->content,
                    'attachments' => $this->addAttachments($request)
                ]; 
            } else {
                $mailData = [
                    'email' => $request->email,
                    'body' => $request->content
                ]; 
            }

            if($request->newsletter) {
                $newsletter = Newsletter::updateOrCreate([
                    'email' => $request->email
                ], [
                    'has_opted_in' => 1
                ]);
            }


            Mail::to("brice-eliasse@gmail.com")->send(new \App\Mail\ContactMail($mailData));

            return  redirect(url()->previous())->with('contact-success', 'Nous avons bien reçu votre formulaire 👌 On revient vers vous dés que possible');
        }
    }

    // Only called if attachments are joined to the mail, it saves them in storage/app/attachments and attach them to model mail
    public function addAttachments($request) {

        $path = storage_path('attachments');
        
        $attachments = $request->file('pj');
        $attachments_names = [];

        foreach ($attachments as $attachment) {
            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = 'attachment-' . uniqid() . '.' . $attachment->getClientOriginalExtension();
        
            // save to storage/app/attachments as the new $filename
            $path = $attachment->storeAs('attachments', $filename);

            array_push($attachments_names, $filename);
        }
        
        // create folder
        if(!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        
        return $attachments_names;
    }
}
