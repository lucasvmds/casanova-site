<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeamItem extends Component
{
    /**
     * Dados utilizados na renderização do componente
     * 
     * @var array
     */
    protected const DATA = [
        'fulano' => [
            'image' => 'images/home/team/fulano.png',
            'name' => 'Fulano de Tal',
            'profession' => 'Engenheiro Agrônomo',
            'formations' => [
                'Formação A',
                'Formação B',
                'Formação C',
            ],
        ]
    ];

    /**
     * Nome do integrante da equipe
     * 
     * @var string
     */
    protected $name;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.team-item', self::DATA[$this->name]);
    }
}
