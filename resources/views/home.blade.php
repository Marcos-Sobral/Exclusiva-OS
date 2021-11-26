@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div class="container">
<form method="POST" action="{{route('home')}}">    
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

            </div>

                </h1>
                <br> <br>
                <div class="text-center mt-3 mb-4">
                <a href="{{ url('assets/bootstrap/index.html') }}">
                        <button class="btn btn-success">Inicio</button>
                    </a>
                </div>


                <br> <br>

                <div class="text-center mt-3 mb-4">
                    <a href="{{ route('index-create') }}">
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


                    
                    </table>

        </div>
    </div>
</div>
@endsection
