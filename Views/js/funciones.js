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
		console.log("Error al cargar las categorias.");
	})
}


function cargarProductoras(){
	//$('#productora').empty();
	$.getJSON('../JSON/productora', function(resp){
		//console.log(resp);
		for (var i in resp) {
			$("#productora").append('<option value="'+resp[i].ID_PRODUCTORA+'" >'+resp[i].NOM_PRODUCTORA+'</option>');
		}
	}).error(function(e){
		console.log("Error al cargar las productoras.");
	})
}

function cargarGeneros(){
	//$('#productora').empty();
	$.getJSON('../JSON/genero', function(resp){
		//console.log(resp);
		for (var i in resp) {
			$("#genero").append('<option value="'+resp[i].ID_GENERO+'" >'+resp[i].NOM_GENERO+'</option>');
		}
	}).error(function(e){
		console.log("Error al cargar los generos.");
	})
}

