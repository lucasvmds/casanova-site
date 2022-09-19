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

    /**
     * Renderiza a página sobre os serviços ambientais
     * 
     * @return View|Factory 
     * @throws BindingResolutionException 
     */
    public function environmental()
    {
        return view('pages.segments.environmental');
    }

    /**
     * Renderiza a página sobre a segurança privada
     * 
     * @return View|Factory 
     * @throws BindingResolutionException 
     */
    public function security()
    {
        return view('pages.segments.security');
    }

    /**
     * Renderiza a página sobre a garagem de veículos
     * 
     * @return View|Factory 
     * @throws BindingResolutionException 
     */
    public function vehicles()
    {
        return view('pages.segments.vehicles');
    }

    /**
     * Renderiza a página sobre a corretora de seguros
     * 
     * @return View|Factory 
     * @throws BindingResolutionException 
     */
    public function insurance()
    {
        return view('pages.segments.insurance');
    }
}
