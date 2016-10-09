  <html>
  <head>
    <?php include(HTML_DIR.'/overall/headerPanel.php') ?>
  </head>
  <body>
    <?php include(HTML_DIR.'/overall/navPanel.php') ?>
    <div class="container">
      <h3 align="center">Nueva Película</h3>
      <br>
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="agregar">
         <fieldset>
          <div class="form-group">
           <label for="tituloOficial" class="col-lg-2 control-label">Título Oficial</label>
           <div class="col-lg-10">
             <input type="text" class="form-control" name="tituloOficial" id="tituloOficial" placeholder="Título Oficial" value="<?php echo $datos['TITULO_OFICIAL']; ?>" required>
           </div>
         </div>  
         <div class="form-group">
           <label for="tituloLatino" class="col-lg-2 control-label">Título Latino</label>
           <div class="col-lg-10">
            <input type="text" class="form-control" name="tituloLatino" id="tituloLatino" placeholder="Título Latino" value="<?php echo $datos['TITULO_LATINO']; ?>" required>
          </div>
        </div>    
        <div class="form-group">
         <label for="director" class="col-lg-2 control-label">Director</label>
         <div class="col-lg-10">
          <input type="text" class="form-control" name="director" id="director" placeholder="Director" value="<?php echo $datos['DIRECTOR']; ?>" required>
        </div>
      </div>  

      <div class="form-group">
       <label for="fechaEstreno" class="col-lg-2 control-label">Fecha de Estreno</label>
       <div class="col-lg-10">
        <input type="date" class="form-control"  name="fechaEstreno" id="fechaEstreno" value="<?php echo $datos['FECHA_ESTRENO']; ?>" required>
      </div>
    </div>

    <div class="form-group">
     <label for="duracion" class="col-lg-2 control-label">Duración</label>
     <div class="col-lg-10">
      <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duración" value="<?php echo $datos['DURACION']; ?>" required>
    </div>
  </div>  
  <div class="form-group">
   <label for="peso" class="col-lg-2 control-label">Peso (Mb)</label>
   <div class="col-lg-10">
    <input type="text" class="form-control" name="peso" id="peso" placeholder="Peso" required value="<?php echo $datos['PESO']; ?>">
  </div>
</div>  

<div class="form-group">
  <label for="resolucion" class="col-lg-2 control-label">Resolución(Px)</label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="resolucion" id="resolucion" placeholder="Resolución" required value="<?php echo $datos['RESOLUCION']; ?>">
  </div>
</div>  
<div class="form-group">
 <label for="trailer" class="col-lg-2 control-label">Trailer</label>
 <div class="col-lg-10">
  <input type="text" class="form-control" name="trailer" id="trailer" placeholder="URL Youtube" value="<?php echo $datos['TRAILER']; ?>" required>
</div>
</div>  

<div class="form-group">
 <label for="portada" class="col-lg-2 control-label">Portada</label>
 <div class="col-lg-10">
  <input type="text" class="form-control" name="portada" id="portada" placeholder="URL Imagen" required value="<?php echo $datos['PORTADA']; ?>">
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
   <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Clasificación" required value="<?php echo $datos['CLASIFICACION']; ?>">
 </div>
</div>

<div class="form-group">
 <label for="valoracion" class="col-lg-2 control-label">Valoración</label>
 <div class="col-lg-10">
   <input type="number" class="form-control" name="valoracion" id="valoracion" placeholder="Valoración" required value="<?php echo $datos['VALORACION']; ?>">
 </div>
</div>
<div class="form-group">
 <label for="reparto" class="col-lg-2 control-label">Reparto</label>
 <div class="col-lg-10">
  <textarea class="form-control" rows="3" name="reparto"><?php echo $datos['REPARTO']; ?></textarea>

</div>
</div>

<div class="form-group">
 <label for="sinopsis" class="col-lg-2 control-label">Sinopsis</label>
 <div class="col-lg-10">
  <textarea class="form-control" rows="3" name="sinopsis"><?php echo $datos['SINOPSIS']; ?></textarea>

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
  <input type="date" class="form-control" name="fechaIngreso" value="<?php echo $datos['FECHA_INGRESO']; ?>"  readonly>
</div>
</div>
<div class="form-group">
  <label class="col-lg-2 control-label">Subtitulada</label>
  <div class="col-lg-10">
    <div class="radio">
     <label>
      <input type="radio" name="subtitulada" id="optionsRadios1" value="Si" <?php echo ($datos['SUBTITULOS']=='Si') ? 'checked' : null ?> >
      Si
    </label>

    <label>
      <input type="radio" name="subtitulada" id="optionsRadios2" value="No" <?php echo ($datos['SUBTITULOS']=='No') ? 'checked' : null ?>>
      No
    </label>
  </div>
</div>
</div>     
<div class="form-group">
  <label for="clasificacion" class="col-lg-2 control-label">Enlaces: </label>
  <div class="col-lg-10">
    <table class="table-condensed" id="enlacesTabla" width="100%">
      <thead>
        <tr>
          <th id="Servidor">Servidor</th>
          <th id="Fuente">Fuente</th>
          <th id="Enlace">Enlace</th>
          <th id="Enlace"></th>
        </tr>
      </thead>
      <tbody> 
      </tbody>
    </table>
  </div>
</div>
<div class="form-group">
  <label for="clasificacion" class="col-lg-2 control-label">Servidores</label>
  <div class="col-lg-10">
   <select class="form-control" name="servidor" id="servidor" required>
   </select>
 </div>
</div>
<div class="form-group">
  <label for="clasificacion" class="col-lg-2 control-label">Fuente</label>
  <div class="col-lg-10">
   <select class="form-control" name="fuente" id="fuente" required>
   </select>
 </div>
</div>
<div class="form-group">
  <label for="clasificacion" class="col-lg-2 control-label">URL</label>
  <div class="col-lg-10">
    <input type="text" class="form-control" name="enlace" id="enlace" placeholder="URL" required>
  </div>
</div>
<div class="form-group">
 <div class="col-lg-10 col-lg-offset-2">
  <button type="submit" class="btn btn-success">Guardar</button>
  <button type="button" class="btn btn-warning" id="botonAgregar">Agregar Enlace</button>
  <input type="text" class="form-control" name="totalEnlaces" id="totalEnlaces" value="0" required>
</div>
</div>
</fieldset>
</form>
</div>

</div>
<div class="col-md-2"></div>
</div>  
<?php include(HTML_DIR.'/overall/footerPanel.php') ?> 
<script type="text/javascript" src="<?php echo URL; ?>Views/DataTables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>Views/DataTables/media/js/dataTables.bootstrap.js"></script>
<script>

  $(document).ready(function(){
    cargarFuentes();
    cargarServidores();
    cargarProductoras(<?php echo $datos['PRODUCTORA']; ?>);
    cargarGeneros(<?php echo $datos['GENERO']; ?>);
    cargarPaises(<?php echo $datos['PAIS']; ?>);
    cargarIdiomas(<?php echo $datos['IDIOMA']; ?>);
    cargarCalidad(<?php echo $datos['CALIDAD']; ?>);
    cargarEnlaces(<?php echo $datos['ID']; ?>);



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

        $.get("../JSON/Servidor",{servidor:servidor}, function(nomServer){
          $.get("../JSON/Fuente",{fuente:fuente}, function(nomFuente){
            cont++;
            $("#totalEnlaces").val(cont);
            table.row.add( [
              nomServer  +"<input type='hidden' class='form-control' name='servidor_"+cont+"' value='"+servidor+"'>",
              nomFuente  +"<input type='hidden' class='form-control' name='fuente_"+cont+"' value='"+fuente+"'>",
              enlace + "<input type='hidden' class='form-control' name='enlace_"+cont+"' value='"+enlace+"'>",
              "<button type='button' class='btn btn-danger' id='borrar_"+cont+"'>Borrar</button>"
              ] ).draw( false );
          });
        });
        
      });

    }); 

  </script>
</body>
</html>   