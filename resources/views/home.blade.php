@extends('layout.templete')
@section('Link','Cadastrando')
@section('content')
    <div class="main">
        <div class="row">
            @if(session ('msg'))
                <p class='msg'> {{ session('msg') }} </p>
            @endif
            @yield('content')
        </div>
    </div>
@endsection
