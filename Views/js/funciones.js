function __(id){
	return document.getElementById(id);
}
function DeleteItem(contenido, url){
	var action= window.confirm(contenido);
	if (action) {
		window.location=url;
	}
}


function cargarCategorias(){
	//$('#categorias').empty();

	$.getJSON('JSON/categoria', function(resp){
		//console.log(resp);
		for (var i in resp) {
			$("#categorias").append('<p><a href="'+resp[i].ID_CATEGORIA+'">'+resp[i].NOM_CATEGORIA+'</a></p>');
		}
	}).error(function(e){
		$("#resultado").append('<br><div class="alert alert-info">  <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> No hay salones disponibles</strong> para el profesor seleccionado. </div>');
	})
}





