<?php
require('seguridad.php');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<LINK REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title><?php echo $data["titulo"]; ?></title>
	</head>
	
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
			
			<form id="nuevo" name="nuevo" method="POST" action="carga.php?c=empleados&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="nombre"class="form-label">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"/>
				</div>
				
				<div class="form-group">
					<label for="apellidos">Apellidos</label>
					<input type="text" class="form-control" id="apellidos" name="apellidos" />
				</div>
				
				<div class="form-group">
					<label for="NSS">NSS</label>
					<input type="text" class="form-control" id="NSS" name="NSS" />
				</div>
				
				<div class="form-group">
					<label for="RFC">RFC</label>
					<input type="text" class="form-control" id="RFC" name="RFC" />
				</div>
				
				<div class="form-group">
					<label for="edad">Edad</label>
					<input type="text" class="form-control" id="edad" name="edad" />
				</div>

                <div class="form-group">
					<label for="direccion">Dirección</label>
					<input type="text" class="form-control" id="direccion" name="direccion" />
				</div>

                <div class="form-group">
					<label for="telefono">Teléfono</label>
					<input type="text" class="form-control" id="telefono" name="telefono" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>