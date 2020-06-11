@csrf

<div class="form-group">
	<label for="title">Título del Proyecto</label>
		<input class="form-control border-0 bg-light shadow-sm" 
			id="title" 
			type="text" 
			name="title" 
			placeholder="Título" 
			value="{{ old('title', $project->title) }}">
</div>

<div class="form-group">
	<label for="url">Url del Proyecto</label>
		<input class="form-control border-0 bg-light shadow-sm" 
			id="url"
			type="text" 
			name="url" 
			placeholder="Url" 
			value="{{ old('url', $project->url) }}">
</div>

<div class="form-group">
	<label for="description">Descripción del Proyecto</label>
		<textarea class="form-control border-0 bg-light shadow-sm" 
			name="description"
			placeholder="Descripción">{{ old('description', $project->description) }}
		</textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">
	
	{{ $btnText }}

</button>

<a class="btn btn-link btn-block bg-secondary text-white" 
	href="{{ route('projects.index') }}">
	Cancelar
</a>