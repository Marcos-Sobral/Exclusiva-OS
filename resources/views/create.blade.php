@extends('layout.templete')

@section('title','Cadastrando')

@section('content')


<div class="container">

    <form method="POST" action="{{route('index-store')}}" enctype="multipart/form-data">    
    @csrf
    

    <div class="form-group">
            <label  for="ID">ID</label>
             <input class="form-control" type="text" name="id" id="id" placeholder="Informe o id do produto"><br>
        </div>

        <div class="form-group">
            <label  for="nomeDoProduto">Nome do produto</label>
             <input class="form-control" type="text" name="title" id="title" placeholder="Informe o nome do produto"><br>
        </div>

        <div class="form-group">
            <label for="valor"> Valor</label>
            <input class="form-control" type="text" name="preco" id="preco" placeholder="Informe o Valor do produto"><br>
        </div>

        <div class="form-group">
            <label  for="nomeDoProduto">Quantidade </label>
             <input class="form-control" type="text" name="quantidade" id="quantidade" placeholder="Informe a quantidade de produto"><br>
        </div>

        <div class="form-group">
            <label  for="date">Data de Cadastro </label>
             <input class="form-control" type="date" name="date" id="date"><br>
        </div>

        <div class="form-group">
           <label for="image"> Imagem do Produto:</label>
           <input type="file" id="image" name="image" class="from-control-file">
        </div>
    

        <div class="text-center mt-3 mb-4">
            <input type="submit" name="submit" class="btn btn-primary">
</div>

    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

@endsection 