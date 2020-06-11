<!DOCTYPE html>
<html>
<head>
	<title>{{ $mensaje['subject'] }}</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $mensaje['name'] }} - {{ $mensaje['email'] }} </p>
	<p><strong>Asunto: </strong>{{ $mensaje['subject'] }} </p>
	<p><strong>Contenido:</strong> {{ $mensaje['content'] }} </p>
</body>
</html>