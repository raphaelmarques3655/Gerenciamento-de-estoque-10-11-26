<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaIndex extends Component
{
    public function render()
    {
        $categorias = Categoria::all();

        return view(
            'livewire.categoria-index',
            compact('categorias')
        );

        
    }
    
}