@extends('layout')
@section('contenido')
<h1>Contacto</h1>
<h2>Escribe tu mensaje</h2>
@if(session()->has('info'))
<h3>{{ session('info') }}</h3>
@else
<form method="POST" action="{{ route('mensajes.store') }}">
	{!! csrf_field() !!}
<p>
	<label for="nombre">
		Nombre
		<input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
		{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
	</label>
</p>
<p>
	<label for="email">
		Email
		<input type="text" class="form-control" name="email" value="{{ old('email') }}">
		{!! $errors->first('email', '<span class=error>:message</span>') !!}
	</label>
</p>
<p>
	<label>
		Mensaje
		<textarea name="mensaje" class="form-control" value="{{ old('mensaje') }}"></textarea>
		{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
	</label>
</p>
<input type="submit" class="btn btn-primary" name="Enviar">
</form>
@endif
<hr>
@endsection