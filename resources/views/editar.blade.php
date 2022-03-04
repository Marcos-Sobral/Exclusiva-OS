@extends('layout.templete')

@section('title','Editando')

@section('content')



<div class="container px-5 my-5">
        <form name="formCad" id="formCad" method="post"  action="{{ route('edit', $prod->id) }}">    
            @csrf
            @method("PUT")
            
                <div class="form-group">
                    <label class="form-label"  for="nomeProduto">Nome do produto</label>
                    <input class="form-control" name="nomeProduto" type="text" id="nomeProduto" value="{{ $prod->nomeProduto}}" placeholder="Informe o nome do produto"><br>
                </div>

                <div class="form-group">
                    <label class="form-label" for="precoProduto"> Valor</label>
                    <input class="form-control" name="precoProduto" type="text" id="precoProduto"
                    value="{{ $prod->precoProduto }}" placeholder="Informe o Valor do produto"><br>
                </div>

                <div class="form-group">
                    <label class="form-label" for="quantidadeProduto"> Quantidade </label>
                    <input class="form-control" name="quantidadeProduto" type="text" id="quantidadeProduto" value="{{ $prod->quantidadeProduto }}"  placeholder="Informe a quantidade de produto"><br>
                </div>

                <div class="form-group">
                    <label for="image"> Imagem do Produto:</label>
                    <input type="file" value="{{ $prod->image}}" id="image" name="image" class="from-control-file">
                </div>

                <div class="text-center mt-3 mb-4">   
                        <button class="btn btn-success">Editar</button>
                </div>
        </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

@endsection 