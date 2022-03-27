<?php
  class EmpleadosController {
		
   public function __construct(){
        require_once "models/EmpleadosModel.php";
        session_start();
    
   }
    public function index(){
        //require_once "modelo.php";
        
        $empleados = new Empleados_model();
        $data["titulo"] = "Empleados";
        $data["empleados"] = $empleados->get_empleados();
        
        require_once "views/Empleados/Empleados.php";	
    }
    
    public function nuevo(){
        
        $data["titulo"] = "Empleados";
        require_once "views/Empleados/Empleados_nuevo.php";
    }
    
    public function guarda(){
        
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $NSS = $_POST['NSS'];
        $RFC = $_POST['RFC'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        
        $empleados = new Empleados_model();
        $empleados->insertar($nombre, $apellidos, $NSS, $RFC, $edad, $direccion, $telefono);
        $data["titulo"] = "Empleados";
        $this->index();
    }
    
    public function modificar($id){
        
        $empleados = new Empleados_model();
        
        $data["id"] = $id;
        $data["empleados"] = $empleados->get_empleado($id);
        $data["titulo"] = "Empleados";
        require_once "views/Empleados/Empleados_modifica.php";
    }
    
    public function actualizar(){

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $NSS = $_POST['NSS'];
        $RFC = $_POST['RFC'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];

        $empleados = new Empleados_model();
        $empleados->modificar($id, $nombre, $apellidos, $NSS, $RFC, $edad, $direccion, $telefono);
        $data["titulo"] = "Empleados";
        $this->index();
    }
    
    public function eliminar($id){
        
        $empleados = new Empleados_model();
        $empleados->eliminar($id);
        $data["titulo"] = "Empleados";
        $this->index();
    }	
}

?>