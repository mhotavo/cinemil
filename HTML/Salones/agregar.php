	<html>
	<head>
		<?php include(HTML_DIR.'/overall/header.php') ?>
	</head>
	<body>
		<?php include(HTML_DIR.'/overall/nav.php') ?>
		<div class="container-fluid"  >
			<h2 align="center">Nuevo Salón</h2>
			<br>
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2"></div>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<form class="form-horizontal" enctype="multipart/form-data" method="POST">
						<fieldset>
							<div class="form-group">
								<label for="inputPrimerApellido" class="col-lg-2 control-label">Numero</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="inputNumero" placeholder="Numero" required>
								</div>
							</div>	
							<div class="form-group">
								<label for="inputNombres" class="col-lg-2 control-label">Nombre</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="inputNombre" placeholder="Nombre" required>
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
				<div class="col-xs-2 col-sm-2 col-md-2"></div>
			</div>  
		</div>
		<?php include(HTML_DIR.'/overall/footer.php') ?> 
	</body>
	</html>		