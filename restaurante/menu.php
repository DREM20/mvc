<a href="../restaurante/sesiones/salir.php">Salir</a>
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="../restaurante/css/estilos.css" media="screen" />

    <fieldset>
        <table border="1" width="80%" class="table">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card" style="width: 500px;">
                    <thead>
                        <div class="p-5 border rounded">
                            <div class="card-body">
                                <h2 class="card-title">Menu</h2>

                                <a class="card-text">Seleccione una de las siguientes opciones para ver, crear, modifica y eliminar los registros.</a>
                            </div>
                        </div>
                    </thead>
                    <tbody>
                        <div>
                            <?php
                            if ($_GET["rol"] == "general") {
                            ?>
                                <tr>
                                    <td>
                                        <button>
                                            <a href="principal.php?c=bebidas&a=index" class="btn btn-outline-dark container-fluid my-2">BEBIDAS</a>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button>
                                            <a href="principal.php?c=platillos&a=index" class="btn btn-outline-dark container-fluid my-2">PLATILLOS</a>

                                        </button>



                            <?php
                            }
                            ?>
                            <?php
                            if ($_GET["rol"] == "admin") {
                            ?>
                                <tr>
                                    <td>
                                        <button>
                                            <a href="principal.php?c=cuentas&a=index" class="btn btn-outline-dark container-fluid my-2">CUENTAS</a>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button>
                                            <a href="principal.php?c=bebidas&a=index" class="btn btn-outline-dark container-fluid my-2">BEBIDAS</a>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button>
                                            <a href="principal.php?c=platillos&a=index" class="btn btn-outline-dark container-fluid my-2">PLATILLOS</a>

                                        </button>
                                    </td>
                                </tr>




                            <?php
                            }
                            ?>
                        </div>
                    </tbody>
                </div>
            </div>
        </table>
    </fieldset>
