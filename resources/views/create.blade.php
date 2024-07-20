<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <livewire:links-head />
    <title>Cadastro</title>
</head>
<body>    

    <livewire:header />

    <main class='container sombra_container mt-5'>
        <h4 class="p-3">Adicionando produto no estoque</h4>
        <form method="POST" action="{{ route('index-store') }}" enctype="multipart/form-data">        
        @csrf   
        <div class="col p-3">
            <div class="row mb-4">
            <div class="col-md-4">
                <label for="nomeDoProduto">Nome do produto</label>
                <input class="form-control" type="text" name="title" id="title" placeholder="EX: Blusa">
            </div>
            <div class="col-md-4">
                <label for="valor">Valor</label>
                <input class="form-control" type="text" name="preco" id="preco" placeholder="EX: R$ 20.00">
            </div>
            <div class="col-md-4">
                <label for="nomeDoProduto">Quantidade</label>
                <input class="form-control" type="text" name="quantidade" id="quantidade" placeholder="EX: 2">
            </div>
            </div>
        </div>
        <div class="text-center mt-15">
            <label for="image">Imagem do Produto:</label>
            <input type="file" id="image" name="image" class="form-control-file" onchange="previewImage(event)">
            <div class="text-center mt-3 mb-4">
            <img id="image-preview" src="#" alt="Pré-visualização da Imagem" style="display: none; max-width: 200px; max-height: 200px;" />
        </div>
        <div class="text-center pb-3">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
        </form>
    </main> 
</body>
</html>