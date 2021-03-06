@extends('layout')
@section('contenido')
<h1>Todos los mensajes</h1>
<table class="table">
<thead>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Mensaje</th>
		<th>Acciones</th>
	</tr>
</thead>
<tbody>
	@foreach($messages as $message)
		<tr>
			<td>{{ $message->id }}</td>
			<td>
				<a href="{{ route('mensajes.show', $message->id) }}">{{ $message->nombre }}</a>
			</td>
			<td>{{ $message->email }}</td>
			<td>{{ $message->mensaje }}</td>
			<td>
				<a href="{{ route('mensajes.edit', $message->id) }}" class="btn btn-info btn-xs">Editar</a>
				<form method="POST" style="display: inline;" action="{{ route('mensajes.destroy', $message->id) }}">
						{!! csrf_field() !!}
						{!! method_field('DELETE') !!}
					<button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
				</form>
			</td>
		</tr>
	@endforeach
</tbody>
</table>
<hr>
@endsection