<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class ContactsController extends Controller
{
    public function contact()
    {
    	return view('messages.contact');
    }

    public function store(ContactFormRequest $request)
    {
    	$mailable = new ContactMessageCreated(
            $request->name,
    		$request->email,
    		$request->message);


    Mail::to(config('laracarte.mail'))->send($mailable);
    		 
         Flashy::message('Good Job', 'http://your-awesome-link.com');

    return redirect()->route('home');
    }

  
}