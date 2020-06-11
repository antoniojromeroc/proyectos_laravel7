<!DOCTYPE html>
<html>
<head>
	{{-- <title>@yield('title', 'Blog de Antonio Romero')</title> --}}
	<title>{{ config('app.name', 'Blog de Antonio') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- <link rel="stylesheet" type="text/css" href="{{ mix('css/app.cs') }}">
	<script type="text/javascript" src="{{ mix('js/app.js') }}" defer></script> --}}
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js" defer></script>
</head>
<body>
	<div id="app" class="d-flex 
						 h-screen 
						 justify-content-between
						 flex-column">
		<header>
			@include('partials.nav')
			@include('partials.session-status')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
	</div>
</body>
</html>