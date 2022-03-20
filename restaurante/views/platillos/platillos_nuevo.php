<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../restaurante/css/estilos.css" media="screen"/>
		<title><?php echo $data["titulo"]; ?></title>
	</head>
	
	<body>
		<fieldset>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="principal.php?c=platillos&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" />
				</div>
				
				<div class="form-group">
					<label for="costo">costo</label>
					<input type="text" class="form-control" id="costo" name="costo" />
				</div>
				
				<div class="form-group">
					<label for="descripccion">Descripcion</label>
					<input type="text" class="form-control" id="descripccion" name="descripccion" />
				</div>
				
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
		</fieldset>
	</body>
</html>