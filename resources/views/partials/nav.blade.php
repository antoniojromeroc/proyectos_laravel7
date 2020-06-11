<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
		<button class="navbar-toggler" 
				type="button" 
				data-toggle="collapse" 
				data-target="#navbarSupportedContent" 
				aria-controls="navbarSupportedContent" 
				aria-expanded="false" 
				aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				{{-- Aqui llamo a una funcion para configurar el estilo. Esta funcion esta en helpers.php --}}
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}" 
						href="{{ route('home') }}">
						@lang('Home')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('about') }}" 
						href="{{ route('about') }}">
						@lang('About')
					</a>
				</li>
				{{-- Así se ve la línea sin llamar a la funcion del helper. 
					Solo la deje para mostrar como se desarrollo.
					Pero el uso de la funcion es lo correcto para reutilizar el codigo.
					--}}
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('contact') ? 'active' : ''}}" 
						href="{{ route('contact') }}">
						@lang('Contact')
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ request()->routeIs('projects.*') ? 'active' : ''}}" 
						href="{{ route('projects.index') }}">
						Proyectos
					</a>
				</li>
				@auth
					<li class="nav-item">
						<a class="nav-link" 
							href="#"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							Cerrar sesión
						</a>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}" 
							href="{{ route('login') }}">
							Login
						</a>
					</li>
				@endauth
			</ul>
		</div>
	</div>
</nav>