@extends('layout')

@section('content')

	<div class="container">

        <div class="row">

        	<div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/about.svg" alt="Desarrollo Web">
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

	           <h1 class="display-5 text-primary">
                   @lang('About')
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
        
        </div>
		https://undraw.co/illustrations
    </div>
	
@endsection