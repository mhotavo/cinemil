	<html>
	<head>
		<?php include(HTML_DIR.'/overall/header.php') ?>
	</head>
	<body>
		<?php include(HTML_DIR.'/overall/nav.php') ?>
		<div  class="container box-principal">
			<h3  align="center"><?php echo $datos['NOMBRES'] ." ". $datos['PRIMER_APELLIDO']." ". $datos['SEGUNDO_APELLIDO'] ; ?></h3>
			<br>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title" align="center"> Información general</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<img class="img-responsive" src="<?php echo URL;?>HTML/Profesores/avatars/<?php echo  !empty($datos['IMAGEN']) ? $datos['IMAGEN'] : 'no-image.png'    ; ?>" required>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-horizontal" >
								<fieldset>
									<div class="form-group">
										<label for="inputNombres" class="col-lg-2 control-label">Nombres</label>
										<div class="ver col-lg-10">
											<?php echo $datos['NOMBRES']; ?>
										</div>
									</div>		
									<div class="form-group">
										<label for="inputPrimerApellido" class="col-lg-2 control-label">Primer Apellido</label>
										<div class="ver col-lg-10">
											<?php echo $datos['PRIMER_APELLIDO']; ?>
										</div>
									</div>		
									<div class="form-group">
										<label for="inputSegundoApellido" class="col-lg-2 control-label">Segundo Apellido</label>
										<div class="ver col-lg-10">
											<?php echo $datos['SEGUNDO_APELLIDO']; ?>
										</div>
									</div>			    	        
									<div class="form-group">
										<label for="inputDireccion" class="col-lg-2 control-label">Teléfono</label>
										<div class="ver col-lg-10">
											<?php echo $datos['TELEFONO']; ?>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCelular" class="col-lg-2 control-label"> </label>
										<div class="ver col-lg-10">
											<?php echo $datos['EMAIL']; ?>
										</div>
									</div>			    
									<div class="form-group">
										<label for="inputCelular" class="col-lg-2 control-label"></label>
										<div class="ver col-lg-10">
											<button onclick="window.location = '<?php echo URL; ?>profesores'" class="btn btn-default">Regresar</button>
										</div>
									</div>
								</div>
								
								
							</fieldset>
						</form>


					</div>
					<div class="col-md-2"></div>
				</div>
			</div>  
		</div>
	</div>
		<?php include(HTML_DIR.'/overall/footer.php') ?> 
	</body>
	</html>		