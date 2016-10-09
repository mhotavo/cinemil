<script src="<?php echo URL; ?>Views/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>Views/js/funciones.js"></script> 
<script type="text/javascript">
	
	function cargarCategorias(){
		$.getJSON('<?php echo URL; ?>/JSON/categoria', function(resp){
			for (var i in resp) {
				$("#categorias").append('<p><a href="'+resp[i].ID_CATEGORIA+'">'+resp[i].NOM_CATEGORIA+'</a></p>');
			}
		}).error(function(e){
			console.log("Error al cargar las categorias.");
		})
	}


	function cargarProductoras(id){
		$.getJSON('<?php echo URL; ?>/JSON/productora', function(resp){
			for (var i in resp) {
				$("#productora").append('<option value="'+resp[i].ID_PRODUCTORA+'" >'+resp[i].NOM_PRODUCTORA+'</option>');
			}
			$("#productora").val(id).change();
		}).error(function(e){
			console.log("Error al cargar las productoras.");
		})
	}

	function cargarGeneros(id){
		$.getJSON('<?php echo URL; ?>/JSON/genero', function(resp){
			for (var i in resp) {
				$("#genero").append('<option value="'+resp[i].ID_GENERO+'" >'+resp[i].NOM_GENERO+'</option>');
			}
			$("#genero").val(id).change();
		}).error(function(e){
			console.log("Error al cargar los generos.");
		})
	}

	function cargarPaises(id){
		$.getJSON('<?php echo URL; ?>/JSON/pais', function(resp){
			for (var i in resp) {
				$("#pais").append('<option value="'+resp[i].ID_PAIS+'" >'+resp[i].NOM_PAIS+'</option>');
			}
			$("#pais").val(id).change();
		}).error(function(e){
			console.log("Error al cargar los paises.");
		})
	}

	function cargarIdiomas(id){
		$.getJSON('<?php echo URL; ?>/JSON/idioma', function(resp){
			for (var i in resp) {
				$("#idioma").append('<option value="'+resp[i].ID_IDIOMA+'" >'+resp[i].NOM_IDIOMA+'</option>');
			}
			$("#idioma").val(id).change();
		}).error(function(e){
			console.log("Error al cargar los idiomas.");
		})
	}

	function cargarFuentes(id){
		$.getJSON('<?php echo URL; ?>/JSON/fuente', function(resp){
			for (var i in resp) {
				$("#fuente").append('<option value="'+resp[i].ID_FUENTE+'" >'+resp[i].NOM_FUENTE+'</option>');
			}
			$("#fuente").val(id).change();
		}).error(function(e){
			console.log("Error al cargar los fuentes.");
		})
	}

	function cargarServidores(id){
		$.getJSON('<?php echo URL; ?>/JSON/servidor', function(resp){
			for (var i in resp) {
				$("#servidor").append('<option value="'+resp[i].ID_SERVIDOR+'" >'+resp[i].NOM_SERVIDOR+'</option>');
			}
			$("#servidor").val(id).change();
		}).error(function(e){
			console.log("Error al cargar los servidores.");
		})
	}

	function cargarCalidad(id){
		$.getJSON('<?php echo URL; ?>/JSON/calidad', function(resp){
			for (var i in resp) {
				$("#calidad").append('<option value="'+resp[i].ID_CALIDAD+'" >'+resp[i].NOM_CALIDAD+'</option>');
			}
			$("#calidad").val(id).change();
		}).error(function(e){
			console.log("Error al cargar los servidores.");
		})
	}

	//Editar pelicula
	function cargarEnlaces(id){
		$.getJSON('<?php echo URL; ?>/JSON/enlaces',{id:id}, function(resp){
			var cont=0;
			var table = $('#enlacesTabla').DataTable();
			table.clear();
			for (var i in resp) {
				cont++;
				$("#totalEnlaces").val(cont);
				table.row.add( [
					resp[i].NOM_SERVIDOR  +"<input type='hidden' class='form-control' name='servidor_"+cont+"' value='"+resp[i].ID_SERVIDOR+"'>",
					resp[i].NOM_FUENTE  +"<input type='hidden' class='form-control' name='fuente_"+cont+"' value='"+resp[i].ID_FUENTE+"'>",
					resp[i].ENLACE + "<input type='hidden' class='form-control' name='enlace_"+cont+"' value='"+resp[i].ENLACE+"'>",
					"<button type='button' class='btn btn-danger' id='borrar_"+cont+"'>Borrar</button>"
					] ).draw( false );
			}
			$("#calidad").val(id).change();
		}).error(function(e){
			console.log("Error al cargar los servidores.");
		})
	}
</script>
<script src="<?php echo URL; ?>Views/bootstrap/js/bootstrap.min.js"></script> 	
<div class="col-md-12">
	<blockquote  class="blockquote-reverse">
		<p>Cinemil</p>
		<footer>Ironman <?php echo date("Y"); ?>  &copy; </footer>
	</blockquote>
</div>