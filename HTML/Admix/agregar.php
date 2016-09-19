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
  				<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="admix/agregar">
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
  								<select class="form-control" name="productora">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="genero" class="col-lg-2 control-label">Genero</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="genero">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="pais" class="col-lg-2 control-label">País</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="pais">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="idioma" class="col-lg-2 control-label">Idioma</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="idioma">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>


  						<div class="form-group">
  							<label for="calidad" class="col-lg-2 control-label">Calidad</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="calidad">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="enlaces" class="col-lg-2 control-label">Enlaces</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="enlaces">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>
  						<div class="form-group">
  							<label for="servidores" class="col-lg-2 control-label">Servidores</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="servidores">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>
  						<div class="form-group">
  							<label for="fuente" class="col-lg-2 control-label">Fuente</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="fuente">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="clasificacion" class="col-lg-2 control-label">Clasificación</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="clasificacion">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="valoracion" class="col-lg-2 control-label">Valoración</label>
  							<div class="col-lg-10">
  								<select class="form-control" name="valoracion">
  									<option value="">[...]</option>
  									<option value="F" >Femenino</option>
  									<option value="M" >Masculino</option>
  								</select>
  							</div>
  						</div>
  						<div class="form-group">
  							<label for="reparto" class="col-lg-2 control-label">Reparto</label>
  							<div class="col-lg-10">
  								<textarea class="form-control" rows="3" id="reparto"></textarea>
  								
  							</div>
  						</div>

  						<div class="form-group">
  							<label for="sinopsis" class="col-lg-2 control-label">Sinopsis</label>
  							<div class="col-lg-10">
  								<textarea class="form-control" rows="3" id="sinopsis"></textarea>
  								
  							</div>
  						</div>
  						<div class="form-group">
  							<label for="capturas" class="col-lg-2 control-label">Capturas</label>
  							<div class="col-lg-10">
  								<input type="file" class="form-control" name="capturas" >
  							</div>
  						</div>
  						
  						<div class="form-group">
  							<label for="inputEmail" class="col-lg-2 control-label">Fecha de ingreso</label>
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
  								<button type="reset" class="btn btn-default">Cancelar</button>
  								<button type="submit" class="btn btn-success">Guardar</button>
  							</div>
  						</div>
  					</fieldset>
  				</form>


  			</div>
  			<div class="col-md-2"></div>
  		</div>  
  	</div>
  	<?php include(HTML_DIR.'/overall/footerPanel.php') ?> 
  </body>
  </html>   