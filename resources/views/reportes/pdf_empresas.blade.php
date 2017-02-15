<!DOCTYPE html>
<html>
<head>
	<title>Reporte</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Styles -->
</head>
<body>
	
	<div class="container">
		<section class="">
			<br>
			<a href="" class="btn btn-info">Hola</a>
			<div class="datos">
				<h2 class="center-align"> Lista de Empresas </h2>
				<table class="table">
					<thead>
						<tr>
							<td>RUC</td>
							<td>Razón social</td>
							<td>Representante - Dni</td>
							<td>Contacto</td>
							<td>Telefono</td>
							<td>Correo</td>
						</tr>
					</thead>

					<tbody>
						@foreach($empresas as $emp)
						<tr>
							<td>{{ $emp->RUC }}</td>
							<td>{{ $emp->razon_social }}</td>
							<td>{{ $emp->representante }} - {{ $emp->dni }}</td>
							<td>{{ $emp->contacto }}</td>
							<td>{{ $emp->telefono1 }}</td>
							<td>{{ $emp->correo1 }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</section>
	</div>

</body>
</html>