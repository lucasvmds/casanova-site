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
        'agronomo' => [
            'name' => 'Claudio Gotardo Filho ',
            'profession' => 'Engenheiro Agrônomo',
            'code' => 'CREA 506.032.802-2',
        ],
        'civil' => [
            'name' => 'Ernaldo Costa Calvoso',
            'profession' => 'Engenheiro Civil',
            'code' => 'CREA 060.138.626-9',
        ],
        'advogado' => [
            'name' => 'Antonio Sergio da Fonseca Filho',
            'profession' => 'Advogado',
            'code' => 'OAB/SP 248041',
        ],
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
