  <html>
  <head>
  	<?php include(HTML_DIR.'/overall/headerPanel.php') ?>
  </head>
  <body>
  	<?php include(HTML_DIR.'/overall/navPanel.php') ?>
  	<div class="container">
  		<h3 align="center">Nueva Película</h3>
  		<br>
  		<div class="row">
  			<div class="col-md-2"></div>
  			<div class="col-md-8">
  				<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="agregar">
  					<fieldset>
  						<div class="form-group">
  							<label for="tituloOficial" class="col-lg-2 control-label">Título Oficial</label>
  							<div class="col-lg-10">
  								<input type="text" class="form-control" name="tituloOficial" placeholder="Título Oficial" required>
  							</div>
  						</div>	
  						<div class="form-group">
  							<label for="tituloLatino" class="col-lg-2 control-label">Título Latino</label>
  							<div class="col-lg-10">
  								<input type="text" class="form-control" name="tituloLatino" placeholder="Título Latino" required>
  							</div>
  						</div>		
  						<div class="form-group">
  							<label for="director" class="col-lg-2 control-label">Director</label>
  							<div class="col-lg-10">
  								<input type="text" class="form-control" name="director" placeholder="Director" required>
  							</div>
  						</div>	

  						<div class="form-group">
  							<label for="fechaEstreno" class="col-lg-2 control-label">Fecha de Estreno</label>
  							<div class="col-lg-10">
  								<input type="date" class="form-control" name="fechaEstreno" required>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="duracion" class="col-lg-2 control-label">Duración</label>
  							<div class="col-lg-10">
  								<input type="text" class="form-control" name="duracion" placeholder="Duración" >
  							</div>
  						</div>	
  						<div class="form-group">
  							<label for="peso" class="col-lg-2 control-label">Peso (Mb)</label>
  							<div class="col-lg-10">
  								<input type="text" class="form-control" name="peso" placeholder="Peso" >
  							</div>
  						</div>	

              <div class="form-group">
                <label for="resolucion" class="col-lg-2 control-label">Resolución(Px)</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="resolucion" placeholder="Peso" >
                </div>
              </div>  
              <div class="form-group">
               <label for="trailer" class="col-lg-2 control-label">Trailer</label>
               <div class="col-lg-10">
                <input type="text" class="form-control" name="trailer" placeholder="URL Youtube" >
              </div>
            </div>	

            <div class="form-group">
             <label for="portada" class="col-lg-2 control-label">Portada</label>
             <div class="col-lg-10">
              <input type="text" class="form-control" name="portada" placeholder="URL Imagen" >
            </div>
          </div>	
          <div class="form-group">
           <label for="productora" class="col-lg-2 control-label">Productora</label>
           <div class="col-lg-10">
             <select class="form-control" name="productora" id="productora">
               <option value="">[...]</option>


             </select>
           </div>
         </div>

         <div class="form-group">
           <label for="genero" class="col-lg-2 control-label">Genero</label>
           <div class="col-lg-10">
            <select class="form-control" name="genero" id="genero">
             <option value="">[...]</option>
           </select>
         </div>
       </div>

       <div class="form-group">
         <label for="pais" class="col-lg-2 control-label">País</label>
         <div class="col-lg-10">
          <select class="form-control" name="pais" id="pais">
           <option value="">[...]</option>
         </select>
       </div>
     </div>

     <div class="form-group">
       <label for="idioma" class="col-lg-2 control-label">Idioma</label>
       <div class="col-lg-10">
        <select class="form-control" name="idioma" id="idioma">
         <option value="">[...]</option>
       </select>
     </div>
   </div>


   <div class="form-group">
     <label for="calidad" class="col-lg-2 control-label">Calidad</label>
     <div class="col-lg-10">
      <select class="form-control" name="calidad" id="calidad">
       <option value="">[...]</option>
     </select>
   </div>
 </div>

 <div class="form-group">
   <label for="clasificacion" class="col-lg-2 control-label">Clasificación</label>
   <div class="col-lg-10">
    <select class="form-control" name="clasificacion" id="clasificacion">
     <option value="">[...]</option>
   </select>
 </div>
</div>

<div class="form-group">
 <label for="valoracion" class="col-lg-2 control-label">Valoración</label>
 <div class="col-lg-10">
  <select class="form-control" name="valoracion">
   <option value="">[...]</option>
 </select>
</div>
</div>
<div class="form-group">
 <label for="reparto" class="col-lg-2 control-label">Reparto</label>
 <div class="col-lg-10">
  <textarea class="form-control" rows="3" name="reparto"></textarea>

</div>
</div>

<div class="form-group">
 <label for="sinopsis" class="col-lg-2 control-label">Sinopsis</label>
 <div class="col-lg-10">
  <textarea class="form-control" rows="3" name="sinopsis"></textarea>

</div>
</div>
<div class="form-group">
 <label for="capturas" class="col-lg-2 control-label">Capturas</label>
 <div class="col-lg-10">
  <input type="file" class="form-control" name="capturas" >
</div>
</div>

<div class="form-group">
 <label for="fechaIngreso" class="col-lg-2 control-label">Fecha de ingreso</label>
 <div class="col-lg-10">
  <input type="date" class="form-control" name="fechaIngreso" value="<?php echo date("Y-m-d"); ?>" >
</div>
</div>
<div class="form-group">
  <label class="col-lg-2 control-label">Subtitulada</label>
  <div class="col-lg-10">
    <div class="radio">
     <label>
      <input type="radio" name="subtitulada" id="optionsRadios1" value="Si" >
      Si
    </label>

    <label>
      <input type="radio" name="subtitulada" id="optionsRadios2" value="No" checked="">
      No
    </label>
  </div>
</div>
</div>		    

<div class="form-group">
 <div class="col-lg-10 col-lg-offset-2">
  <button type="submit" class="btn btn-success">Guardar</button>
  <button type="button" class="btn btn-info" id="botonEnlaces">Agregar Enlaces</button>
</div>
</div>
</fieldset>
</form>

<div class="modal fade" id="ModalEnlaces" role="dialog" >
 <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <h4 class="modal-title" id="exampleModalLabel">Enlaces</h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal">
       <table class="table-condensed" id="enlacesTabla" width="100%">
        <thead>
          <tr>
            <th id="Nro">Nro</th>
            <th id="Servidor">Servidor</th>
            <th id="Fuente">Fuente</th>
            <th id="Enlace">Enlace</th>
          </tr>
        </thead>
        <tbody> 
        </tbody>
      </table>


      <div class="form-group">
       <label for="servidor" class="col-lg-3 control-label">Servidores</label>
       <div class="col-lg-9">
         <select class="form-control" name="servidor" id="servidor" required>
           <option value="">[...]</option>
         </select>
       </div>
     </div>
     <div class="form-group">
       <label for="fuente" class="col-lg-3 control-label">Fuente</label>
       <div class="col-lg-9">
         <select class="form-control" name="fuente" id="fuente" required>
          <option value="">[...]</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="enlace" class="col-lg-3 control-label">URL</label>
      <div class="col-lg-9">
        <input type="text" class="form-control" name="enlace" id="enlace" placeholder="URL" required>
      </div>
    </div>  
  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-warning" id="botonAgregar">Agregar Enlace</button>
  <button type="button" class="btn btn-success">Guardar Enlaces</button>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-2"></div>
</div>  
</div>
<?php include(HTML_DIR.'/overall/footerPanel.php') ?> 
<script type="text/javascript" src="<?php echo URL; ?>Views/DataTables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>Views/DataTables/media/js/dataTables.bootstrap.js"></script>
<script>

  $(document).ready(function(){

    $("#botonEnlaces").click(function(){
      $("#ModalEnlaces").modal();
      cargarFuentes();
      cargarServidores();
      $("#enlacesTabla").css("font-size", "13px");
      $("#ModalEnlaces").css("font-size", "13px");
      //Agregar nuevo enlace
      var table = $('#enlacesTabla').DataTable();
      table.clear();
      var cont=0;
      $("#botonAgregar").click(function(){ 
        var servidor=$( "#servidor").val();
        var fuente=$( "#fuente").val();
        var enlace=$( "#enlace").val();

        var nomServidor= $.get("../JSON/Servidor",{servidor:servidor}, function(data){
          
        });
        console.log(nomServidor);
        cont=cont+1;
        table.row.add( [
          cont,
          nomServidor,
          fuente,
          enlace
          ] ).draw( false );

      });
    });
  }); 

  $(document).ready(cargarProductoras);
  $(document).ready(cargarGeneros);
  $(document).ready(cargarPaises);
  $(document).ready(cargarIdiomas);
</script>
</body>
</html>   