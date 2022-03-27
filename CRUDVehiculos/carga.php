<?php


/*$control = new VehiculosController();
$control = new EmpleadosController();
$control->index();*/

require_once "config/config.php";
require_once "core/routes.php";
require_once "config/database.php";
require_once "controllers/Vehiculos.php";
require_once "controllers/Empleados.php";
 
  
if(isset($_GET['c'])){
    
    $controlador = cargarControlador($_GET['c']);
    
    if(isset($_GET['a'])){
        if(isset($_GET['id'])){
            cargarAccion($controlador, $_GET['a'], $_GET['id']);
            } else {
            cargarAccion($controlador, $_GET['a']);
        }
        } else {
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
    
    } else {
    
    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador->$accionTmp();
}