<?php
require('seguridad.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
      <a href="carga.php?c=empleados&a=index" class="btn btn-primary">Empleados</a>
      <a href="salir.php" class="btn btn-primary">Salir</a>
  </div>
</nav>
      
</div>
<div class="text-center">
  <img src="img/principal.jpg" class="rounded" alt="...">
</div>
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="carga.php?c=empleados&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="placa">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["empleados"]["Nombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="marca">Apellidos</label>
					<input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $data["empleados"]["Apellidos"]?>" />
				</div>
				
				<div class="form-group">
					<label for="modelo">NSS</label>
					<input type="text" class="form-control" id="NSS" name="NSS" value="<?php echo $data["empleados"]["NSS"]?>" />
				</div>
				
				<div class="form-group">
					<label for="anio">RFC</label>
					<input type="text" class="form-control" id="RFC" name="RFC" value="<?php echo $data["empleados"]["RFC"]?>" />
				</div>
				
				<div class="form-group">
					<label for="color">Edad</label>
					<input type="text" class="form-control" id="edad" name="edad" value="<?php echo $data["empleados"]["Edad"]?>" />
				</div>

                <div class="form-group">
					<label for="color">Dirección</label>
					<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $data["empleados"]["Direccion"]?>" />
				</div>

                <div class="form-group">
					<label for="color">Teléfono</label>
					<input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $data["empleados"]["Telefono"]?>" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		