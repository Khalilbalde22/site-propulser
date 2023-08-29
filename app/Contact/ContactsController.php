<?php

namespace App\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function index(){
        return view('Contact::index');
    }
    public function submit(ContactRequest $request){
        Mail::to('my@email.com')->send(new contactMail($request->nom , $request->email, $request->sujet, $request->message));
        return to_route('contact.index');
    }
}
