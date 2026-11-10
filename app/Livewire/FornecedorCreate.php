<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Fornecedor;
use App\Models\Produto;
use Livewire\Component;

class FornecedorCreate extends Component
{

    public $nome;
    public $cpf;
    public $telefone;
    public $endereco;
    public $email;
    
    public function salvar()
    {
        $this->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'email' => 'required',
            
        ]);

        Fornecedor::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'email' => $this->email,
            
        ]);
        
    session()->flash(
    'success',
    'Produto cadastrado com sucesso!'
    );


    return redirect()->route('fornecedor.index');

    }

    

public function render()
{
    $categorias = Categoria::orderBy('nome')->get();

    return view(
        'livewire.fornecedor-create',
        compact('categorias')
    );
    
}

}

