<?php
include_once "../restaurante/template/header.php"
?>
<!DOCTYPE html>
<html lang="es">
<div class="container">
    <div class="row my-5">
        <div class="col-6 mx-auto">
            <?php
            if (isset($_GET["error"]) == "si") { ?>
            <div class="alert alert-danger text-center" role="alert">
                <h4><i class="fas fa-exclamation-triangle"></i>   Error de usuario o Contraseña</h4>
            </div>
            <?php } ?>
            <div class="card">
                
                <div class="card-header text-center">
                    <h3>Introduce tus datos</h3>
                </div>
                <div class="card-body">
                    <div class="card-title text-center">
                        <h5>Regístrate o inicia sesión para continuar</h5>
                    </div>
                </div>
                <form class="px-5" action="principal.php?c=cuentas&a=autenticar" 
                method="post">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
                    <label class="mt-3 form-label" for="password">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="password">
                    <div class="py-4">
                        <input type="submit" class="btn btn-primary container-fluid" value="Entrar">
                    </div>
                </form>
                <div class="card-footer">
                    <a class="text-reset" href="">Registrate</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "../restaurante/template/footer.php"
?>