<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{

    public $nome;
    public $descricao;
    public $marca;
    public $categoria_id;
    public $unidade_de_medida;
    public $preco_custo;
    public $preco_venda;
    public $quantidade_estoque;
    public $quantidade_minima;
    
    public function salvar()
    {
        $this->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'marca' => 'required',
            'categoria_id' => 'required',
            'unidade_de_medida' => 'required',
            'preco_custo' => 'required',
            'preco_venda' => 'required',
            'quantidade_estoque' => 'required',
            'quantidade_minima' => 'required',
        ]);

        Produto::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marca' => $this->marca,
            'categoria_id' => $this->categoria_id,
            'unidade_de_medida' => $this->unidade_de_medida,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'quantidade_estoque' => $this->quantidade_estoque,
            'quantidade_minima' => $this->quantidade_minima,
            
        ]);
        
    session()->flash(
    'success',
    'Produto cadastrado com sucesso!'
    );


    return redirect()->route('produto.index');

    }

    

public function render()
{
    $categorias = Categoria::orderBy('nome')->get();

    return view(
        'livewire.produto-create',
        compact('categorias')
    );
    
}

}