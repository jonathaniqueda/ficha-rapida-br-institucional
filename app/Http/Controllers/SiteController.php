<?php

namespace App\Http\Controllers;

use App\Custom\Request\RequestMessage;
use App\Http\Requests\SendEmailRequest;
use App\Mail\ContactEmail;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->middleware(\GrahamCampbell\HTMLMin\Http\Middleware\MinifyMiddleware::class);
    }

    public function index()
    {
        return view('index');
    }

    public function sendEmail(SendEmailRequest $request)
    {
        $all = $request->all();

        \Mail::to('contato@ficharapidabr.com.br')
            ->cc('jonathaniqueda@me.com')
            ->send(new ContactEmail($all));

        return RequestMessage::success(['msg' => 'Mensagem foi enviada com sucesso']);
    }
}
