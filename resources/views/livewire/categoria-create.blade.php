
<div class="container py-5">
    <div class="text-center">
    <form wire:submit.prevent="salvar">

        <br>
        <input type="nome" class="form-control" id="categoria" placeholder="Categoria" wire:model="nome">
        <br>
        <br>
        
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <button type="submit" class="btn btn-primary">CADASTRAR</button>
    </form>
</div>
</div>