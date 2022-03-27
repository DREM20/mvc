<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
        <LINK REL=StyleSheet HREF="estilos.css" TYPE="text/css" MEDIA=screen>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>

    <body>
    <div class="bg-success p-2 text-dark bg-opacity-25">
        <div class="container">
            <div class="text-center divImg" >
        <H1>Menú de acciones</H1>
        


</div>
</div>
<div class="text-center">
  <img src="img/auto.jpg" class="rounded" width="500" alt="...">
</div>

<?php if(isset($_GET['error'])=='si'){?>
         <h3>Error en tu usuario y/o contraseña </h3>
       <?php } ?>
       <div class="center">
        <form action="carga.php?c=usuarios&a=index" method='post'>
            <h3>Introduce tus datos</h3>
            <div class="form-group">
            <label for="nom"> Nombre </lable>
            <input type="text" id="nom" name="nombre" >
            </div>
            <br>
            <div class="form-group">
            <label for="pas"> Contraseña </label>
            <input type="password" id='pas' name="pas" >
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Entrar">
</form>
</div>
</div>
</body>

    </html>
    