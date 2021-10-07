@extends('layout.templete')

@section('title','Editando')

@section('content')



<div class="container px-5 my-5">
    <form name="formCad" id="formCad" method="post" action="{{url('produto')}}">    
    @csrf

        <div class="mb-3">
            <label class="form-label" for="nomeDoProduto">Nome do produto</label>
             <input class="form-control" type="text" name="title" id="title" placeholder="Informe o nome do produto"><br>
        </div>

        <div class="mb-3">
            <label class="form-label" for="valor"> Valor</label>
            <input class="form-control" type="text" name="preco" id="preco" placeholder="Informe o Valor do produto"><br>
        </div>

        <div class="mb-3">
            <label class="form-label" for="nomeDoProduto">Quantidade </label>
             <input class="form-control" type="text" name="quantidade" id="quantidade" placeholder="Informe a quantidade de produto"><br>
        </div>

        <div class="text-center mt-3 mb-4">
    <a href="{{url('produto/create')}}">
        <button class="btn btn-success">Editar</button>
    </a>
</div>

    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

@endsection 