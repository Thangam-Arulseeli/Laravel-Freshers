<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create( ){
        return view('contact.create'); // Calls create.blade.php view file under contact folder
    }

    public function store(){
      //dd(request()->all());
        $data=request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
      //dd($data);
     
     //  Mail::to('test@example.com')->send(new ContactFormMail());
       Mail::to('test@example.com')->send(new ContactFormMail($data));
     
       // return redirect('contact');  // Calls the same view page again
      return redirect('contact')->with('action-feedback', 'Message received... Will get back soon....');
    }
}
