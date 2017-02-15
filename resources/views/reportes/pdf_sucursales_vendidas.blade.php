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
				<h2 class="center-align"> Lista de Sucursales Vendidas </h2>
				<table class="table">
                <tr class="info">
                    <td>RUC</td>
                    <td>Razon Social</td>
                    <td>Manzana - Lote</td>
                </tr>
                @foreach($empresas as $empresa)
                    <tr>    
                      <td>{{ $empresa->ruc }}</td>
                      <td>{{ $empresa->razon_social }}</td>  
                      <td>{{ $empresa->manzana}}  - {{ $empresa->lote }}</td> 
                    </tr>  
                @endforeach
            </table>
			</div>
		</section>
	</div>

</body>
</html>