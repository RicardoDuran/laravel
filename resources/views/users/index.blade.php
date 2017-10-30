@extends('layout')
@section('contenido')
<h1>Usuarios</h1>
<table class="table">
<thead>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Role</th>
		<th>Acciones</th>
	</tr>
</thead>
<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->role }}</td>
			<td>
				<a href="" class="btn btn-info btn-xs">Editar</a>
				<form method="POST" style="display: inline;" action="">
					<button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
				</form>
			</td>
		</tr>
		@endforeach
</tbody>
</table>
<hr>
@endsection