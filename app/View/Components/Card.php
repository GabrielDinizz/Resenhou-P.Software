<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public int $cont)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $cards = null;

        if( $this->cont == 0) {
            //renomear a tabela card para evento
            $cards = \App\Models\Card::get(); // Defina seus dados de cards aqui
        }
        else {
            $cards = \App\Models\Card::limit($this->cont)->get();
        }
        
        $nome = "Fernando";

        return view('components.card', [
            //variavel para view
            'cards' => $cards,
            'nome' => $nome
        ]);

    }
}
