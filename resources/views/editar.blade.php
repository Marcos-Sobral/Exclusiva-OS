<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <livewire:links-head />
    <title>Editar</title>
</head>
<body>
    <livewire:header />
    <main class="container sombra_container mt-5">
    <h4 class="p-3">Editando produto no estoque</h4>
        <form name="formCad" id="formCad" method="post"  action="{{ route('edit', $prod->id) }}">         
        @csrf
        @method("PUT")   
        <div class="col p-3">
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label"  for="nomeProduto">Nome do produto</label>
                    <input class="form-control" name="nomeProduto" type="text" id="nomeProduto" value="{{ $prod->nomeProduto}}" placeholder="Informe o nome do produto"><br>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="precoProduto"> Valor</label>
                    <input class="form-control" name="precoProduto" type="text" id="precoProduto"
                    value="{{ $prod->precoProduto }}" placeholder="Informe o Valor do produto">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="quantidadeProduto"> Quantidade </label>
                    <input class="form-control" name="quantidadeProduto" type="text" id="quantidadeProduto" value="{{ $prod->quantidadeProduto }}"  placeholder="Informe a quantidade de produto">
                </div>
            </div>
        </div>
            <div class="text-center mb-3">
                <label for="image">Imagem do Produto:</label>
                <input type="file" value="{{ $prod->image}}" id="image" name="image" class="form-control-file" onchange="previewImage(event)">
                <div class="text-center mt-3 mb-4">
                <img id="image-preview" src="{{ $prod->image}}" alt="Pré-visualização da Imagem" style="display: none; max-width: 200px; max-height: 200px;" />
            </div>
            <div class="text-center pb-3">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </form>
    </main>
</body>
</html>