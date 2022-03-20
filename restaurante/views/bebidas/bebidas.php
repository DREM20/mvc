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
			
			<legend><a href="principal.php?c=bebidas&a=nuevo" class="btn btn-primary">Agregar</a></legend>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Nombre</th>
							<th>Costo</th>
							<th>Descripcion</th>
							<th>Proveedor</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["bebidas"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["nombre"]."</td>";
							echo "<td>".$dato["costo"]."</td>";
							echo "<td>".$dato["descripccion"]."</td>";
							echo "<td>".$dato["proveedor"]."</td>";
							echo "<td><legend><a href='principal.php?c=bebidas&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>Modificar</a></legend></td>";
							echo "<td><legend><a href='principal.php?c=bebidas&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>Eliminar</a></legend></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
		</fieldset>
	</body>
</html>