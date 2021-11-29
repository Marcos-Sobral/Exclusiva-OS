@extends('layout.templete')

@section('title','Delete')

@section('content')
  
            <div class="col-8 m-auto">

                    @foreach($prod as $produtos)

                        <form action= "{{ $produto->id }} " method= "POST">
                            @csrf
                            @method('DELETE')  
                        <button type= "sumbit" class ="btn btn-danger delete-btn">Deletar</button>
                        </form>

                    @endforeach
            </div>


@endsection 