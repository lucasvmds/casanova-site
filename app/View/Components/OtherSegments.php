<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class OtherSegments extends Component
{
    protected const DATA = [
        'ambiental' => [
            'link' => '/servicos-ambientais',
            'name' => 'Serviços Ambientais',
        ],
        'financeiro' => [
            'link' => '/servicos-financeiros',
            'name' => 'Serviços Financeiros',
        ],
        'seguros' => [
            'link' => '/corretora-seguros',
            'name' => 'Correta de Seguros',
        ],
        'veiculos' => [
            'link' => '/compra-venda-veiculos',
            'name' => 'Compra e Venda de Veículos',
        ],
        'seguranca' => [
            'link' => '/seguranca-privada',
            'name' => 'Segurança Privada',
        ],
    ];

    /**
     * Nome do segmento que não será exibido
     * 
     * @var string
     */
    protected $remove; 

    /**
     * Create a new component instance.
     *
     * @param string $remove
     * @return void
     */
    public function __construct($remove)
    {
        $this->remove = $remove;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.other-segments', [
            'segments' => Arr::except(self::DATA, $this->remove),
        ]);
    }
}
