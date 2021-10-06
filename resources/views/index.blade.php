<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title></title>
</head>
<body>
     

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
      <th scope="col">Email</th>
      <th scope="col">senha</th>
    </tr>
  </thead>
  <tbody>
  

    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

</div>
</body>
</html><
