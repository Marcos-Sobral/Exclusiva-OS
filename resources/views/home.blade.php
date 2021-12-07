@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div class="container">
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

             <div class="container-fluid">
                 <div class="row">
                     @if(session ('msg'))
                     <p class='msg'> {{ session('msg') }} </p>
                     @endif
                     @yield('content')
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
                    <a href="{{ route('consulta') }}">
                        <button class="btn btn-success">Consulta</button>
                    </a>
                </div>
        


        </div>
        
    </div>
  
</div>


@endsection