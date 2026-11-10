
<div class="container py-5">
    <div class="text-center">
    <form wire:submit.prevent="salvar">

        <br>
        <input type="nome" class="form-control" id="fornecedor" placeholder="Categoria" wire:model="nome">
        <br>
        <br>

        <br>
        <input type="cpf" class="form-control" id="fornecedor" placeholder="CPF ou CNPJ" wire:model="cpf">
        <br>
        <br>

        <br>
        <input type="telefone" class="form-control" id="fornecedor" placeholder="Telefone" wire:model="telefone">
        <br>
        <br>

        <br>
        <input type="endereco" class="form-control" id="fornecedor" placeholder="Endereco" wire:model="endereco">
        <br>
        <br>

        <br>
        <input type="email" class="form-control" id="fornecedor" placeholder="Email" wire:model="email">
        <br>
        <br>
        
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <button type="submit" class="btn btn-primary">CADASTRAR FORNECEDOR</button>
    </form>
</div>
</div>