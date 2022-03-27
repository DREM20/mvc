<?php
require('seguridad.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title><?php echo $data["titulo"]; ?></title>
		
	
	<body>
		<div class="container">
		<div class="container">
        <H1 class="title">Menú de acciones</H1>
        <nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="principal.php">
      <img src="img/logos.jpg" alt="" width="150" >
    </a>
    
      <a href="carga.php?c=vehiculos&a=index"class="btn btn-primary">Vehiculos</a>
      
      <a href="salir.php" class="btn btn-primary">Salir</a>
  </div>
</nav>
      
</div>
<div class="text-center">
  <img src="img/principal.jpg" class="rounded" alt="...">
</div>
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="carga.php?c=vehiculos&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="placa">Placa</label>
					<input type="text" class="form-control" id="placa" name="placa" value="<?php echo $data["vehiculos"]["Placa"]?>" />
				</div>
				
				<div class="form-group">
					<label for="marca">Marca</label>
					<input type="text" class="form-control" id="marca" name="marca" value="<?php echo $data["vehiculos"]["Marca"]?>" />
				</div>
				
				<div class="form-group">
					<label for="modelo">Modelo</label>
					<input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $data["vehiculos"]["Modelo"]?>" />
				</div>
				
				<div class="form-group">
					<label for="anio">Año</label>
					<input type="text" class="form-control" id="anio" name="anio" value="<?php echo $data["vehiculos"]["anio"]?>" />
				</div>
				
				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" class="form-control" id="color" name="color" value="<?php echo $data["vehiculos"]["color"]?>" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		