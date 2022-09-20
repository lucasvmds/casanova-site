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
            'logo' => 'logos/ambiental/icone.png',
            'logo_alt' => 'logo da casa nova serviços ambientais',
            'title' => 'Serviços Ambientais',
            'text' => 'Atuamos no manejo ecológico de pragas para indústrias e empresas, empregando práticas preventivas no combate às pragas urbanas.',
            'link' => '/servicos-ambientais',
        ],
        'financeiro' => [
            'logo' => 'logos/financeiro/icone.png',
            'logo_alt' => 'logo da casa nova créditos',
            'title' => 'Serviços Financeiros',
            'text' => 'A Casa Nova Crédito atua com diversos bancos afim de lhe ofertar as melhores taxas do mercado. Seja para um crédito pessoal, consignado, financiamento, e por aí vai.',
            'link' => '/servicos-financeiros',
        ],
        'seguros' => [
            'logo' => 'logos/financeiro/icone.png',
            'logo_alt' => 'logo da casa nova corretora de seguros',
            'title' => 'Corretora de Seguros',
            'text' => 'A Casa Nova Corretora de Seguros atua nas áreas de corretagem, consultoria e vendas de seguros, previdência tanto para pessoas físicas e jurídicas.',
            'link' => '/corretora-seguros',
        ],
        'veiculos' => [
            'logo' => 'logos/veiculos/icone.png',
            'logo_alt' => 'logo da casa nova compra e venda de veículos',
            'title' => 'Compra e Venda de Veículos',
            'text' => 'A Casa Nova Veículos trabalha para te oferecer as melhores oportunidades na hora de comprar ou vender o seu veículo. Seja ele leve, pesado, motocicleta, ou qualquer outro.',
            'link' => '/compra-venda-veiculos',
        ],
        'seguranca' => [
            'logo' => 'logos/seguranca/icone.png',
            'logo_alt' => 'logo da casa nova segurança privada',
            'title' => 'Segurança Privada',
            'text' => 'Afim de manter a segurança que está cada vez mais ameaçada atualmente, conte com uma empresa que tem os serviços necessários para proteger, seja pessoas ou bens.',
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
