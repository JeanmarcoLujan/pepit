$(document).ready(function () {
	
});

function updateEstado (btn) {

	console.log(btn.value);

	var sendDatos =
	{
		'id'					: btn.value,
		'estado_id'				: '2',
	};
	var token = $('#token').val();
	
	$.ajax({
		type        : 'POST',
		headers		: {'X-CSRF-TOKEN': token},
		url         : 'http://localhost:8000/validacion',
		data        : sendDatos, 
		dataType    : 'json', 
		success:function(result){
			window.location.reload();  
			alert(result.mensaje);
		},
		error : function(jqXhr) {
			alert("ocurrio un error")
		}
	});

	
	event.preventDefault();
}


function update(btn) {
	console.log(btn.value);
	var sendDatos =
	{
		'id'					: btn.value,
		'estado_id'				: '3',
	};
	var token = $('#token').val();
	
	$.ajax({
		type        : 'POST',
		headers		: {'X-CSRF-TOKEN': token},
		url         : 'http://localhost:8000/validacion/vendida',
		data        : sendDatos, 
		dataType    : 'json', 
		success:function(result){
			window.location.reload();  
			alert(result.mensaje);
		},
		error : function(jqXhr) {
			alert("ocurrio un error")
		}
	});

	
	event.preventDefault();
}