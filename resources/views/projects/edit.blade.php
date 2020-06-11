@extends('layout')

@section('title', 'Portafolio |'.$project->title)

@section('content')

<div class="container">

		<div class="row">

			<div class="col-12 col-sm-10 col-lg-6 mx-auto">

				@include('partials.validation-errors')

				<form class="bg-white shadow rounded py-3 px-4" 
					method="POST" action="{{ route('projects.update', $project)}}">

					<h1 class="display-5">Editar Proyecto</h1>
					<hr>

					@method('PATCH')
					
					@include('projects._form', ['btnText' => 'Guardar'])

				</form>

			</div>

		</div>

	</div>

@endsection