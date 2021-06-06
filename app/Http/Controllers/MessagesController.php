<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecieved;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(){

       $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

        Mail::to('alberto.guzman.220793@gmail.com')->queue(new MessageRecieved($message));

        return 'Mensaje Enviado';
    }
}