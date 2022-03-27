<?php
require('seguridad.php');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
     
      <a href="salir.php" class="btn btn-primary">Salir</a>
  </div>
</nav>
      
</div>
<div class="text-center">
  <img src="img/principal.jpg" class="rounded" alt="...">
</div>
			<!--<h2><?php echo $data["titulo"]; ?></h2>-->
			
			
			<br />
			<br />
			<div class="table table-striped">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Placa</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Año</th>
							<th>Color</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["vehiculos"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["Placa"]."</td>";
							echo "<td>".$dato["Marca"]."</td>";
							echo "<td>".$dato["Modelo"]."</td>";
							echo "<td>".$dato["anio"]."</td>";
							echo "<td>".$dato["color"]."</td>";
							echo "<td><a href='carga.php?c=vehiculos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='carga.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
			<a href="carga.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar</a>
		</div>
		
	</body>
</html>