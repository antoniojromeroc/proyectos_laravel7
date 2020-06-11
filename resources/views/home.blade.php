@extends('layout')

@section('title', 'Home')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

	           <h1 class="display-5 text-primary">
                    Home
                </h1>

                <p class="lead text-secondary">
                    Lorem ipsum es el texto que se usa habitualmente en diseño gráfico en demostraciones de tipografías o de borradores de diseño para probar el diseño visual antes de insertar el texto final. También se usa en programas como Microsoft PowerPoint o Genially como plantillas para remplazar con texto comprensible.
                </p>

                <a class="btn btn-lg btn-block btn-primary" 
                    href="{{ route('contact') }}">
                    Contáctame
                </a>

                <a class="btn btn-lg btn-block btn-outline-primary" 
                    href="{{ route('projects.index') }}">
                    Proyectos
                </a>

            </div>

            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
            </div>
        
        </div>

    </div>
@endsection

{{-- <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
			<li><a href="/portafolio">Portafolio</a></li>
		</ul>
	</nav>
	<h1>Home</h1>
	<?php echo " Mi nombre es " ?>
	<?php //echo $nombre ?? "Invitado" ?>
	{{$nombre ?? "Invitado"}}
</body>
</html> --}}


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}