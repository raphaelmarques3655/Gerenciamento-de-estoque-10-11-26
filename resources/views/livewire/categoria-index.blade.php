<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                
            </tr>
        </thead>

        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td> 
                    <td>{{ $categoria->nome }}</td>
                </tr>
            @endforeach
        </tbody>

        
    </table>
</div>