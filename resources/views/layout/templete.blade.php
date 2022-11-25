<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('Link') - OS </title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/normalize.css'); }} " media="screen" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css'); }} " media="screen" />
	<!-- Font de icons -->
	<script src="https://kit.fontawesome.com/7d7b31a9bc.js" crossorigin="anonymous"></script>
	<!-- BootStrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<!-- Tailwind -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
	
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
</head>
<body>
	
	<header>
        <nav id="nav">
            <a href="/" class="nav-title-icon"><i class="fa-solid fa-star"></i>Exclusiva</a>
            <ul id="nav-menu-ul">
                <li id="nav-menu-li">
                    <a href="/consulta">Inicio</a>
                </li>
                <li id="nav-menu-li">
                    <a href="/create">Criar</a>
                </li>
                <li id="nav-menu-li">
                    <a href="/sobre">Sobre</a>
                </li>
            </ul>
        </nav>
    </header>
	@yield('content')
	
</body>
</html>