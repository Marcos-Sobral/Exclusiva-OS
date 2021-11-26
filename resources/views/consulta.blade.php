@extends('layout.templete')

@section('title','Consulta')

@section('content')
  
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
      @foreach($prod as $produtos)

        <tr>
          <th>{{ $produtos->idProduto }}</th>
          <td>{{ $produtos->nomeProduto }}</td>
          <td>{{ $produtos->quantidadeProduto }}</td>
          <td>{{ $produtos->precoProduto }}</td>
        </tr>
        @endforeach
      </tbody>
    
    </table>
</div>

@endsection 