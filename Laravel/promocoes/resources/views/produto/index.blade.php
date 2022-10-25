<x-layout titulo="Produtos">
    <ul>
        <form action="{{ route('produto.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
        <table>
        <tr><td><b>ID</b></td>
            <td><b>Nome</b></td>
            <td><b>Preço</b></td>
            <td><b>Avaliações</b></td>
            
            <td><b>Detalhes</b></td></tr>

            @foreach($produto as $item)      
                <tr><td>{{$item->id}}</td>
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->preco}}</td>
                    <td>{{$item->quantidadeAvaliacao}}</td>
                    
            <td><a href="{{ route('produto.show', $item->id) }}"><button>Detalhes</button></a></td>
            @endforeach
    </ul>
</x-layout>