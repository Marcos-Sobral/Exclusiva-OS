<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('Link') - OS </title>
  <link rel="icon" href="{{ asset('assets/img/logo/1.png') }}" class="rounded-circle" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/normalize.css'); }} " media="screen" />

	<!-- Font de icons -->
	<script src="https://kit.fontawesome.com/7d7b31a9bc.js" crossorigin="anonymous"></script>

	
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
  
	<!-- BootStrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css'); }} " media="screen" />
</head>
<body>	    
    <header>
      <nav class="navbar navbar-expand-lg bg-white sombra">
        <div class="container-fluid d-flex justify-content-between align-items-center mx-5 my-3">
          
          <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="{{ asset('assets/img/logo/1.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top me-2 rounded-circle">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{ url('/') }}">Catalogo</a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Gerenciamento
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item fw-bold" target="_blank" href="{{ url('consulta') }}">Estoque</a></li>
                      <li><a class="dropdown-item fw-bold" target="_blank" href="{{ url('create') }}">Adicionar produto</a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
	@yield('content')
	
</body>
</html>