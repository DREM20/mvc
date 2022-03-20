

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../restaurante/css/estilos.css" media="screen"/>
		<title><?php echo $data["titulo"]; ?></title>
		
	
	<body>
		<fieldset>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="principal.php?c=platillos&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="nombre">	Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["platillos"]["nombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="costo">Costo</label>
					<input type="text" class="form-control" id="costo" name="costo" value="<?php echo $data["platillos"]["costo"]?>" />
				</div>
				
				<div class="form-group">
					<label for="descripccion">Descripcion</label>
					<input type="text" class="form-control" id="descripccion" name="descripccion" value="<?php echo $data["platillos"]["descripccion"]?>" />
				</div>
				
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
		</fieldset>
	</body>
</html>		