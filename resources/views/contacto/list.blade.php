@extends('layouts.app')

@section('contenido')
<section class="ContentPage full-width">
	<div class="ContentPage-Nav full-width">  
	</div>
	<br>
	
	<div class="datos">
		<h2 class="center-align"> Lista de Empresas </h2>
		<table>
			<thead>
				<tr>
					<th data-field="id">Id</th>
					<th data-field="nombre">Nombres</th>
					<th data-field="titulo">Titulo</th>
					<th data-field="institucion">Institución</th>
					<th data-field="cargo">Cargo</th>
					<th data-field="direccion">Dirección</th>
					<th data-field="registrado">Registrado el</th>
				</tr>
			</thead>

			<tbody>
				@foreach($contactos as $contacto)
				<tr>
					<td>{{ $contacto->id }}</td>
					<td>{{ $contacto->nombre }}</td>
					<td>{{ $contacto->titulo }}</td>
					<td>{{ $contacto->institucion }}</td>
					<td>{{ $contacto->cargo }}</td>
					<td>{{ $contacto->direccion }}</td>
					<td>{{ $contacto->created_at }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<br>
	<br>
</section>
@endsection