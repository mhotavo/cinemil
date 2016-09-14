	<html>
	<head>
		<?php include(HTML_DIR.'/overall/header.php') ?>
	</head>
	<body>
		<?php include(HTML_DIR.'/overall/nav.php') ?>
		<div  class="container box-principal">
			<h3  align="center"><?php echo $datos['NOMBRE'] ." ". $datos['NUMERO']  ; ?></h3>
			<br>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title" align="center"> Editar </h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<form class="form-horizontal" enctype="multipart/form-data" method="POST">
								<fieldset>
									<div class="form-group">
										<label for="inputPrimerApellido" class="col-lg-2 control-label">Número</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="inputNumero" value="<?php echo $datos['NUMERO']; ?>" required >
										</div>
									</div>
									<div class="form-group">
										<label for="inputNombres" class="col-lg-2 control-label">Nombre</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="inputNombre" value="<?php echo $datos['NOMBRE']; ?>" required>
										</div>
									</div>				
									<div class="form-group">
										<div class="col-lg-10 col-lg-offset-2">
											<input type="hidden" class="form-control" name="id"  required value="<?php echo $datos['ID_SALON']; ?>" >
											<button onclick="window.location = '<?php echo URL; ?>Salones'" class="btn btn-default">Regresar</button>
											<button type="submit" class="btn btn-success">Editar</button>
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