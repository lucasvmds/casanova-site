<?php

namespace App\Http\Controllers;

use App\Actions\SendEmailMessages;
use App\Http\Requests\SendMessageRequest;

class HomeController extends Controller
{
    /**
     * Retorna a página home do site
     * @return void 
     */
    public function index()
    {
        return view('pages.home.index');
    }

    public function send(SendMessageRequest $request)
    {
        SendEmailMessages::run($request->validated());
        return redirect('/#contato')->with('message_sent', true);
    }
}
