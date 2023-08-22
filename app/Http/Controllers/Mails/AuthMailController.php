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

        Mail::to('Kobsdev2019@gmail.com')->queue(new RegisterEmail(
            data: ['nome' => 'Fernando', 'mensagem' => 'Tudo bem com você ?']
        ));
    }
}
