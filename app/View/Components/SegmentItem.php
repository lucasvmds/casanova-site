<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SegmentItem extends Component
{
    /**
     * Dados utilizados na renderização do componente
     * 
     * @var array
     */
    protected const DATA = [
        'ambiental' => [
            'logo' => 'images/logos/ambiental/icone.png',
            'logo_alt' => 'logo da casa nova serviços ambientais',
            'title' => 'Serviços Ambientais',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod error saepe quasi impedit, nisi necessitatibus expedita eius itaque laborum omnis quis, ratione maxime ipsa, esse laudantium porro architecto ducimus earum.',
            'link' => '/servicos-ambientais',
        ],
        'financeiro' => [
            'logo' => 'images/logos/financeiro/icone.png',
            'logo_alt' => 'logo da casa nova serviços financeiros',
            'title' => 'Serviços Financeiros',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod error saepe quasi impedit, nisi necessitatibus expedita eius itaque laborum omnis quis, ratione maxime ipsa, esse laudantium porro architecto ducimus earum.',
            'link' => '/servicos-financeiros',
        ],
        'veiculos' => [
            'logo' => 'images/logos/veiculos/icone.png',
            'logo_alt' => 'logo da casa nova compra e venda de veículos',
            'title' => 'Compra e Venda de Veículos',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod error saepe quasi impedit, nisi necessitatibus expedita eius itaque laborum omnis quis, ratione maxime ipsa, esse laudantium porro architecto ducimus earum.',
            'link' => '/compra-venda-veiculos',
        ],
        'seguranca' => [
            'logo' => 'images/logos/seguranca/icone.png',
            'logo_alt' => 'logo da casa nova segurança privada',
            'title' => 'Segurança Privada',
            'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod error saepe quasi impedit, nisi necessitatibus expedita eius itaque laborum omnis quis, ratione maxime ipsa, esse laudantium porro architecto ducimus earum.',
            'link' => '/seguranca-privada',
        ],
    ];

    /**
     * Segmento escolhido para renderizar o compoenente
     * 
     * @var string
     */
    protected $type;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @return void
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.segment-item', self::DATA[$this->type]);
    }
}
