<?php

class UsuariosController{
    
    public function __construct(){
        require_once "models/UsuariosModel.php";
        session_start();
}

public function index(){
    $nombre=$_POST['nombre'];
    $contrasenia=$_POST['pas'];
    //require_once "modelo.php";
    echo 'estamos en index';
    $usuarios = new usuarios_model();
    $data["titulo"] = "Usuarios";
    $acce= $usuarios->get_usuarios($nombre, $contrasenia);
    
    echo 'estamos en index';
    echo $acce;
    $this->acceso($acce);
    
}
public function acceso($acce){
    
    if($acce=='1'){
        $_SESSION['usuario']= $_POST['nombre'];
        $_SESSION['contrasenia'] = $_POST['pas'];
        $_SESSION['autenticado'] = 1;
        require_once 'views/principal.php';      
    }
    else{
    if($acce=='2'){
        $_SESSION['usuario']= $_POST['nombre'];
        $_SESSION['contrasenia'] = $_POST['pas'];
        $_SESSION['autenticado'] = 1;
        //header('Location:Vehiculos.php');
        require_once "views/vehiculos/vehiculos.php";
    }
    else{

        header('Location:index.php?error=si');
    }
    }
}
}
?>