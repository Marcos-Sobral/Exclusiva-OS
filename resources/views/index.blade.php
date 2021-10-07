@extends('layout.templete')

@section('title','Inicio')

@section('content')

 
h1> Lista </h1>

<br> <br>
<div class="text-center mt-3 mb-4">
<a href="{{ url('assets/bootstrap/index.html') }}">
        <button class="btn btn-success">Inicio</button>
    </a>
</div>


<br> <br>

<div class="text-center mt-3 mb-4">
    <a href="{{ route('index-cadastro') }}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<br> <br>

<div class="text-center mt-3 mb-4">
    <a href="{{ route('index-editar') }}">
        <button class="btn btn-success">Editar</button>
    </a>
</div>

<br> <br>
<a href="#">Excluir</a>
<br> <br>

<br> <br>
<a href="#">Consultar</a>
<br> <br>

<div class="col-8 m-auto">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preco</th>
    </tr>
  </thead>
  <tbody>
  @foreach($produtos as $produto)

    <tr>
      <th>{{ $produtos->id }}</th>
      <td>{{ $produtos->nome }}</td>
      <td>{{ $produtos->Quantidade }}</td>
      <td>{{ $produtos->preco }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection 