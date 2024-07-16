<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Evento;

class cardDetalhes extends Component
{
    public $eventos;

    /**
     * Create a new component instance.
     */
    public function __construct($eventos)
    {
        $this->eventos = $eventos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-detalhes', [
            'eventos' => $this->eventos ?? []
        ]);
    }
}
