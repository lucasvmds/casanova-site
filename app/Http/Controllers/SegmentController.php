<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;

class SegmentController extends Controller
{
    /**
     * Renderiza a página sobre os serviços financeiros
     * 
     * @return View|Factory 
     * @throws BindingResolutionException 
     */
    public function financial()
    {
        return view('pages.segments.financial');
    }
}
