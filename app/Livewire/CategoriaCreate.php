<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{

    public $nome;

    public function salvar()
    {
        $this->validate([
            'nome' => 'required',
        ]);

        Categoria::create([
            'nome' => $this->nome,
        ]);

        session()->flash(
            'success',
            'Categoria cadastrado com sucesso!'
        );

        
        return redirect()->route('categoria.index');

    }
}
