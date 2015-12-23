<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::style('assets/css/bootstrap.css'); }}
</head>
<body>
	<div class="container">
		<h1>Bienvenido {{ Auth::user()->name; }}</h1>
		{{ HTML::link('/logout', 'Cerrar sesión.') }}		
	</div>
	<script src="https://code.jquery.com/jquery.js"></script>
    {{ HTML::script('assets/js/bootstrap.js'); }}
</body>
</html>
