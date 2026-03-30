@extends('layouts.app')

@section('content')

<h2>Nuevo Operario</h2>

<form method="POST" action="/operarios">
@csrf
<input name="nombre" placeholder="Nombre"><br>
<input name="turno" placeholder="Turno"><br>
<button class="btn btn-success">Guardar</button>
</form>

@endsection
