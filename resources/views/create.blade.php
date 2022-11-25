@extends('layout.templete')

@section('Link','Cadastrando')
@section('content')

    <main class='main'>
        <div class="container">
            <form method="POST" action="{{route('index-store')}}" enctype="multipart/form-data">    
            @csrf 
                <div class="grid grid-cols-3 gap-8">  
                    <div class="">
                        <label  for="nomeDoProduto">Nome do produto</label>
                        <input class="form-control" type="text" name="title" id="title" placeholder="Informe o nome do produto"><br>
                    </div>
                    <div class="">
                        <label for="valor"> Valor</label>
                        <input class="form-control" type="text" name="preco" id="preco" placeholder="Informe o Valor do produto"><br>
                    </div>
                    <div class="]">
                        <label  for="nomeDoProduto">Quantidade </label>
                        <input class="form-control" type="text" name="quantidade" id="quantidade" placeholder="Informe a quantidade de produto"><br>
                    </div>
                </div> 
                <div class="text-center mt-15">
                    <label for="image"> Imagem do Produto:</label>
                    <input type="file" id="image" name="image" class="from-control-file">
                </div>
                <div class="text-center mt-3 mb-4">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </main>
@endsection