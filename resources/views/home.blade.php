<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <livewire:links-head />
    <title>Document</title>
</head>
<body>
    <livewire:header />
    <main class="container sombra_container mt-5">
        oi
        <div class="row">
            @if(session ('msg'))
                <p class='msg'> {{ session('msg') }} </p>
            @endif
            @yield('content')
        </div>
    </main>
</body>
</html>
