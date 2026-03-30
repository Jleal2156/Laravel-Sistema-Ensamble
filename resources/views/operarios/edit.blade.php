@extends('layouts.app')

@section('content')

<h2>Editar Operario</h2>

<form method="POST" action="/operarios/{{ $operario->id }}">
@csrf
@method('PUT')

<input name="nombre" value="{{ $operario->nombre }}"><br>
<input name="turno" value="{{ $operario->turno }}"><br>

<button class="btn btn-primary">Actualizar</button>
</form>

@endsection
