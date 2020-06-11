@extends('layout')

@section('content')
	<h1>Portafolio</h1>
	<ul>
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
				<li>
					<a href="{{ route('portafolio.show', $portafolioItem)}}">
						{{ $portafolioItem->title }}
					</a>
					<br>
					<small>{{ $portafolioItem->description }}</small>
					{{-- <small>{{ $loop->last ? 'Este el último..' : '' }}</small>
					<small>{{ $loop->first ? 'Este el primero..' : '' }}</small> --}}
				</li>
			@endforeach
		@else
			<li>No hay proyectos para mostrar</li>
		@endif
	</ul>
	{{ $portafolio->links() }}
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
@endsection