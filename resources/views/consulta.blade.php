@extends('layout.templete')

@section('title','Consulta')

@section('content')
  
  <div class="col-8 m-auto">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Foto</th>
          <th scope="col">Nome</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Preco</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>

      <tbody>
      @foreach($prod as $produtos)

        <tr>

          <th>{{ $produtos->id }}</th>
          
          <td> 
            <img src="/images/{{ $produtos->image }}" style="max-width:100px;"> 
          </td>
          
          <td>{{ $produtos->nomeProduto }}</td>
          
          <td>{{ $produtos->quantidadeProduto }}</td>
          
          <td>{{ $produtos->precoProduto }}</td>
          
          <td>

              <a href="edit/{{ $produtos->id }}">
                  @csrf
                  @method('put')
                  <button class="btn btn-primary">Editar</button>
              </a>

              <a href="">
                  <form action= "{{ route('destroy', $produtos->id) }}" method= "POST">
                    @csrf
                    @method('delete')  
                      <button type= "sumbit" class ="btn btn-danger delete-btn">Deletar</button>
                  </form>
              </a>

          </td>

        </tr>

        @endforeach
      </tbody>
    
    </table>
</div>
@endsection 