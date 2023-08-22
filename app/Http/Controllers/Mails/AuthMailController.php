<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    public function sendRegisterMail()
    {
        $registerEmail = new RegisterEmail();
        Mail::to('Kobsdev2019@gmail.com')->send($registerEmail);
    }
}
