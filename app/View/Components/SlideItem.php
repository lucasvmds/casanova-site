<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SlideItem extends Component
{
    /**
     * Armazena os dados de cada slide a ser renderizado
     * 
     * @var array
     */
    protected const DATA = [
        0 => [
            'title' => [
                'Seja bem vindo(a) à',
                'Casa Nova Empreendimentos'
            ],
            'content' => 'O lugar onde você encontrará as mais diversas e melhores soluções, seja para você, ou seu negócio, com certeza nós poderemos te ajudar.',
            'link' => '#empresa',
            'image' => '/images/home/slides/initial_slide.png',
        ],
        1 => [
            'title' => [
                'Casa Nova',
                'Serviços Ambientais'
            ],
            'content' => 'O lugar onde você encontrará as mais diversas e melhores soluções, seja para você, ou seu negócio, com certeza nós poderemos te ajudar.',
            'link' => '/servicos-ambientais',
            'image' => '/images/home/slides/ambiental.png',
        ],
        2 => [
            'title' => [
                'Casa Nova',
                'Serviços Financeiros'
            ],
            'content' => 'O lugar onde você encontrará as mais diversas e melhores soluções, seja para você, ou seu negócio, com certeza nós poderemos te ajudar.',
            'link' => '/servicos-financeiros',
            'image' => '/images/home/slides/financeiro.png',
        ],
        3 => [
            'title' => [
                'Casa Nova',
                'Compra e Venda de Veículos'
            ],
            'content' => 'O lugar onde você encontrará as mais diversas e melhores soluções, seja para você, ou seu negócio, com certeza nós poderemos te ajudar.',
            'link' => '/compra-venda-veiculos',
            'image' => '/images/home/slides/veiculos.png',
        ],
        4 => [
            'title' => [
                'Casa Nova',
                'Segurança Privada'
            ],
            'content' => 'O lugar onde você encontrará as mais diversas e melhores soluções, seja para você, ou seu negócio, com certeza nós poderemos te ajudar.',
            'link' => '/seguranca-privada',
            'image' => '/images/home/slides/seguranca.png',
        ],
    ];

    /**
     * Posição do slide a ser renderizado, começando pelo 0
     * 
     * @var int
     */
    protected $position;

    /**
     * Create a new component instance.
     *
     * @param int $position Posição do slide a ser renderizado, começando pelo 0
     * @return void
     */
    public function __construct($position)
    {
        $this->position = $position;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide-item', self::DATA[$this->position]);
    }
}
