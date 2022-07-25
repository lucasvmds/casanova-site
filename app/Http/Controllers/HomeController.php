<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
