<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <livewire:links-head />
  <title>Estoque</title>
</head>
<body>
  <livewire:header />

  <main class="container sombra_container mt-5">
    <div class="table-responsive">
        <h2 class="text-center font-bold py-4">Produtos cadastrados</h2>
        <table class="table text-center">
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
              <td>{{ $produtos->id }}</td>        
              <td> 
                <img src="/images/{{ $produtos->image }}" style="max-width:100px;"> 
              </td>
              
              <td>{{ $produtos->nomeProduto }}</td>
              
              <td>{{ $produtos->quantidadeProduto }}</td>
              
              <td>{{ $produtos->precoProduto }}</td>
              
              <td class="d-flex justify-content-center gap-3">
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
  </main>
</body>
</html>