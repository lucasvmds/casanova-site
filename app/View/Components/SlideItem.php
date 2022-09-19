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
        'empreendimentos' => [
            'title' => [
                'Seja bem vindo(a) à',
                'Casa Nova Empreendimentos'
            ],
            'content' => 'O lugar onde você encontrará as mais diversas e melhores soluções, seja para você, ou seu negócio, com certeza nós poderemos te ajudar.',
            'link' => '#empresa',
            'image' => '/images/home/slides/initial_slide.png',
        ],
        'ambiental' => [
            'title' => [
                'Casa Nova',
                'Serviços Ambientais'
            ],
            'content' => 'Atuamos no manejo ecológico de pragas para indústrias e empresas, empregando práticas preventivas no combate às pragas urbanas.',
            'link' => '/servicos-ambientais',
            'image' => '/images/home/slides/ambiental.png',
        ],
        'financeiro' => [
            'title' => [
                'Casa Nova',
                'Serviços Financeiros'
            ],
            'content' => 'A Casa Nova Crédito atua com diversos bancos afim de lhe ofertar as melhores taxas do mercado. Seja para um crédito pessoal, consignado, financiamento, e por aí vai.',
            'link' => '/servicos-financeiros',
            'image' => '/images/home/slides/financeiro.png',
        ],
        'veiculos' => [
            'title' => [
                'Casa Nova',
                'Compra e Venda de Veículos'
            ],
            'content' => 'A Casa Nova Veículos trabalha para te oferecer as melhores oportunidades na hora de comprar ou vender o seu veículo. Seja para comprar, vender, trocar.',
            'link' => '/compra-venda-veiculos',
            'image' => '/images/home/slides/veiculos.png',
        ],
        'seguranca' => [
            'title' => [
                'Casa Nova',
                'Segurança Privada'
            ],
            'content' => 'Afim de manter a segurança que está cada vez mais ameaçada atualmente, conte com uma empresa que tem os serviços necessários para proteger, seja pessoas ou bens.',
            'link' => '/seguranca-privada',
            'image' => '/images/home/slides/seguranca.png',
        ],
    ];

    /**
     * Create a new component instance.
     *
     * @param string $item Posição do slide a ser renderizado, começando pelo 0
     * @return void
     */
    public function __construct(
        protected $item
    ){}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.slide-item', self::DATA[$this->item]);
    }
}
