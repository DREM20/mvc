<?php
require('seguridad.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $data["titulo"];?></title>
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
			
			<br />
			<br />
			<div class="table table-striped">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>NSS</th>
							<th>RFC</th>
							<th>Edad</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["empleados"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["Nombre"]."</td>";
							echo "<td>".$dato["Apellidos"]."</td>";
							echo "<td>".$dato["NSS"]."</td>";
							echo "<td>".$dato["RFC"]."</td>";
							echo "<td>".$dato["Edad"]."</td>";
                            echo "<td>".$dato["Direccion"]."</td>";
                            echo "<td>".$dato["Telefono"]."</td>";
							echo "<td><a href='carga.php?c=empleados&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='carga.php?c=empleados&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
			<a href="carga.php?c=Empleados&a=nuevo" class="btn btn-primary">Agregar</a>
		</div>
    
</body>
</html>