<?php

namespace App\Livewire;

use Livewire\Component;

class CategoriaEdit extends Component
{
    public function editar($id)
    {
        return view('livewire.categoria-edit');
    }
}
