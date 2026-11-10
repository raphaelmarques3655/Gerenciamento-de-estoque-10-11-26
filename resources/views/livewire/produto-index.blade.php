
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Unidade De Medida</th>
                <th>Preço De Custo</th>
                <th>Preço De Venda</th>
                <th>Quantidade No Estoque</th>
                <th>Quantidade Minima No Estoque</th>
                <th>Fornecedor</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $produtos)
                <tr>
                    <td>{{ $produtos->id }}</td> 
                    <td>{{ $produtos->nome }}</td>
                    <td>{{ $produtos->descricao }}</td>
                    <td>{{ $produtos->marca }}</td>
                    <td>{{ $produtos->categoria->nome }}</td>
                    <td>{{ $produtos->unidade_de_medida }}</td>
                    <td>{{ $produtos->preco_custo }}</td>
                    <td>{{ $produtos->preco_venda }}</td>
                    <td>{{ $produtos->quantidade_estoque }}</td>
                    <td>{{ $produtos->quantidade_minima }}</td>
                    
                    
                </tr>
            @endforeach
        </tbody>

        
    </table>
</div>