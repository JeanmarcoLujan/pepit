$(document).ready(function () {
	//$('#reportar_incidencia').on('click', registrarIncidencia);
	listSucursales();
});


function listSucursales() {
	var lista_sucursales = $("#lista_sucursales");
	$("#lista_sucursales").empty();
	
	var route = 'http://localhost:8000/sucursal/show';

	$.get(route, function(res){
		$(res).each(function(key,value){
			console.log(value);
			for (var i = 0; i < value.length ;  i++) {
			
				lista_sucursales.append("<tr><td>"+value[i].id+"</td><td>"+value[i].empresa['razon_social']+"</td><td>"+value[i].manzana+"</td><td>"+value[i].lote+"</td><tr>");
			};
			
		});
	});
}