@extends('layout')

@section('content')

	<div class="container">

		<div class="row">

			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				
				<div class="d-flex justify-content-between align-items-center">

					<h1 class="display-5 mb-0">Portafolio</h1>

					@auth

						<a class="btn btn-primary" href="{{ route('projects.create') }}">
							Crear proyecto
						</a>

					@endauth			

				</div>

				<hr>

				<p class="led text-secondary">
					Lista de Proyectos implementados.
				</p>

				<ul class="list-group">
					{{-- 
						Alguna de las herramientas disponibles con @ para los documentos BLADE de Laravel
							@for()
							@endfor

							@while()
							@endwhile
							
							@switch() 
					--}}
					@if($portafolio)

						@foreach($portafolio as $portafolioItem)
							<li class="list-group-item border-0 mb-3 shadow-sm">

								<a class="d-flex justify-content-between align-items-center" 
									href="{{ route('projects.show', $portafolioItem)}}">

									<span class="text-secondary font-weight-bold">
										{{ $portafolioItem->title }}
									</span>

									<span class="text-black-50">
										{{ $portafolioItem->created_at->format('d/m/Y') }}
									</span>

								</a>
								<br>
								{{-- <small>{{ $portafolioItem->description }}</small> --}}
								{{-- <small>{{ $loop->last ? 'Este el último..' : '' }}</small>
								<small>{{ $loop->first ? 'Este el primero..' : '' }}</small> --}}
							</li>
						@endforeach

					@else

						<li class="list-group-item border-0 mb-3 shadow-sm">
							No hay proyectos para mostrar
						</li>

					@endif
					{{ $portafolio->links() }}	
				</ul>

			</div>

	</div>	
@endsection



{{-- <ul>
		@isset($portafolio)
			@foreach($portafolio as $portafolioItem)
				<li>{{ $portafolioItem['title'] }}</li>
			@endforeach
		@else
			<li>No hay proyectos para mostrar</li>
		@endisset
	</ul>
	<ul>
		@forelse($portafolio as $portafolioItem)
			<li>{{ $portafolioItem['title'] }}</li>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
	</ul>
	<ul>
		@forelse($portafolio as $portafolioItem)
			<li><pre>{{ var_dump($loop) }}</pre></li>
		@empty
		@endforelse
	</ul> --}}