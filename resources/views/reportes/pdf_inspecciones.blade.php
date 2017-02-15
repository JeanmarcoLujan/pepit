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
			
			<div class="datos">
				<h2 class="center-align"> Lista de Inspecciones </h2>
				<table class="table">
                    <tr class="info">
                        <td>Nombre</td>
                        <td>Usuario </td>
                        <td>Recibido por</td>
                        <td>Fecha </td>
                        <td>Observacion </td>
                        <td>Estado </td>
                    </tr>
                    @foreach($vistas as $vista)
                        <tr>
                            <td>{{$vista->nombre}}</td>
                            <td>{{$vista->user->name}}</td>
                            <td>{{$vista->recibido}}</td>
                            <td>{{$vista->fecha}}</td>
                            <td>{{$vista->observacion}}</td>
                            <td>{{$vista->estado_inspeccion}}</td>
                        </tr>
                    @endforeach
                </table>
			</div>
		</section>
	</div>

</body>
</html>