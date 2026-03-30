@extends('layouts.app')

@section('content')

<h2>Operarios</h2>
<a href="/operarios/create" class="btn btn-success mb-2">Nuevo</a>

<table class="table">
<tr><th>ID</th><th>Nombre</th><th>Turno</th><th>Acciones</th></tr>

@foreach($operarios as $o)
<tr>
<td>{{ $o->id }}</td>
<td>{{ $o->nombre }}</td>
<td>{{ $o->turno }}</td>
<td>
<a href="/operarios/{{ $o->id }}/edit" class="btn btn-warning btn-sm">Editar</a>
<form action="/operarios/{{ $o->id }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm">Eliminar</button>
</form>
</td>
</tr>
@endforeach

</table>

@endsection
