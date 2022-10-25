<x-layout titulo="Produtos">
    <ul>
        <label for="id">ID</label>
        <input type="text" name="id" id="id"
        value="{{ $produto->id }}" disabled><br>
        <label for="titulo">Nome</label>
        <input type="text" name="titulo" id="titulo"
        value="{{ $produto->titulo }} "><br>
        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco"
        value="{{ $produto->preco }} "><br>
        <label for="quantidadeAvaliacao">Avaliações</label>
        <input type="text" name="quantidadeAvaliacao" id="quantidadeAvaliacao"
        value="{{ $produto->quantidadeAvaliacao }} "><br>
        
    </ul>
</x-layout>