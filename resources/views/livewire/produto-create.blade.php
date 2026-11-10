<div class="container py-5">

    <div class="text-center">
    <form wire:submit="salvar">

        <h5>CADASTRO DE PRODUTO</h5>
        <br><br>
        <input type="nome" class="form-control" id="nome" placeholder="Nome" wire:model="nome">
        <br>
        <br>

        <input type="text" class="form-control" id="descricao" placeholder="Descrição" wire:model="descricao">
        <br>
        <br>

        <input type="text" class="form-control" id="marca" placeholder="Marca" wire:model="marca">
        <br>
        <br>

        <select
        class="form-select"
        wire:model="categoria_id"
        >
        <option value="">Selecione uma categoria...</option>

        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}">
            {{ $categoria->nome }}
        </option>
        @endforeach
        </select><br>
        <br>

        
        <input type="number" class="form-control" id="unidade_de_medida" placeholder="Unidade de medida" wire:model="unidade_de_medida"><br>
        <br>
        <input type="number" class="form-control" id="preco_custo" placeholder="Preço de custo" wire:model="preco_custo"><br>
        <br>
        <input type="number" class="form-control" id="preco_venda" placeholder="Preço de venda" wire:model="preco_venda"><br>
        <br>
        <input type="number" class="form-control" id="quantidade_estoque" placeholder="Quantidade no estoque" wire:model="quantidade_estoque"><br>
        <br>
        <input type="number" class="form-control" id="quantidade_minima" placeholder="Quantidade minima" wire:model="quantidade_minima"<br>
        <br>

        @if (session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif

        <button type="submit" class="btn btn-primary">CADASTRAR PRODUTO</button>
        </form>
        </div>


