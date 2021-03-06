<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
      $data = request()->validate([
          
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'

      ]);

      Mail::to('test@test.com')->send(new ContactMail($data));
       
      return redirect('contact')->with('message', 'Votre Message a ete bien envoye.');
    }
}
