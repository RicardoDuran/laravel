@extends('layout')
@section('contenido')
<h1>Editar</h1>
<form method="POST" action="{{ route('mensajes.update', $message->id) }}">
	{!! csrf_field() !!}
	{!! method_field('PUT') !!}
<p>
	<label for="nombre">
		Nombre
		<input type="text" class="form-control" name="nombre" value="{{ $message->nombre }}">
		{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
	</label>
</p>
<p>
	<label for="email">
		Email
		<input type="text" class="form-control" name="email" value="{{ $message->email }}">
		{!! $errors->first('email', '<span class=error>:message</span>') !!}
	</label>
</p>
<p>
	<label>
		Mensaje
		<textarea name="mensaje" class="form-control">{{ $message->mensaje }}</textarea>
		{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
	</label>
</p>
<input type="submit" class="btn btn-primary" name="Enviar">
</form>
@endsection