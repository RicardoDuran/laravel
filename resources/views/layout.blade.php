<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('/public/css/app.css') }}">
	<title>Sitio</title>
</head>
<body>
<header>
	<?php
		function activeMenu($url){
		return request()->is($url) ? 'active':'';
	}  ?>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!! route('home') !!}" href="#">Laravel<strong>Learn</strong></a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
						<li class="{{ activeMenu('/') }}"><a href="{!! route('home') !!}">Inicio</a></li>
						<li class="{{ activeMenu('saludos*') }}"><a href="{!! route('saludos', 'Ricky') !!}">Saludo</a></li>
						<li class="{{activeMenu('mensajes/create') }}"><a href="{!! route('mensajes.create') !!}">Contacanos</a></li>
						
						@if (auth()->check())
						<li class="{{ activeMenu('mensajes*') }}"><a href="{!! route('mensajes.index') !!}">Mensajes</a></li>
						@endif
						
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					@if (auth()->guest())
						<li class="{{ activeMenu('login') }}"><a href="/laravel/login">Login</a></li>
						@else
						<li><a href="/laravel/logout">Cerrar sesión de {{ auth()->user()->name }}</a> </li>
					@endif
					{{-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li> --}}
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</header>
<div class="container">
	@yield('contenido')
	<footer>Copyright {{ date('Y') }}</footer>
</div>
</body>
</html>