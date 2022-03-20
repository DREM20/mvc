<?php
    session_start();
	class cuentasController {
		
		public function __construct(){
			require_once "models/CuentasModel.php";
		}
		
		public function autenticar(){
        $usuario = new cuentas_model();

            if ($usuario->id_usuarios($_POST['nombre'],  $_POST["password"]) == 1) {
                $_SESSION["usuario"] = $_POST['nombre'];
                $_SESSION["Autenticar"] = "1";
                if ($usuario->autenticacion($_POST['nombre'],  $_POST["password"]) == 1) {
                    header("Location:menu.php?rol=admin");
                }
                if ($usuario->autenticacion($_POST['nombre'],  $_POST["password"]) == 2) {
                    header("Location:menu.php?rol=general");
                }
            }
            else {
                header("Location:index.php?error=si");
            }
        }
    
    
        public function index(){
                
                
            $cuentas = new cuentas_model();
            $data["titulo"] = "Cuentas";
            $data["cuentas"] = $cuentas->get_cuentas();
            
            require_once "views/cuentas/cuentas.php";	
        }
        
        public function nuevo(){
            
            $data["titulo"] = "Cuentas";
            require_once "views/cuentas/cuentas_nuevo.php";
        }
        
        public function guarda(){
            
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
            $tipousuario = $_POST['tipousuario'];
            
            
            $cuentas = new cuentas_model();
            $cuentas->insertar($usuario, $contraseña, $tipousuario);
            $data["titulo"] = "Cuentas";
            $this->index();
        }
        
        public function modificar($id){
            
            $cuentas = new cuentas_model();
            
            $data["id"] = $id;
            $data["cuentas"] = $cuentas->get_cuenta($id);
            $data["titulo"] = "Cuentas";
            require_once "views/cuentas/cuentas_modificar.php";
        }
        
        public function actualizar(){

            $id = $_POST['id'];
            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
            $tipousuario = $_POST['tipousuario'];

            $cuentas = new cuentas_model();
            $cuentas->modificar($id, $usuario, $contraseña, $tipousuario);
            $data["titulo"] = "Cuentas";
            $this->index();
        }
        
        public function eliminar($id){
            
            $cuentas = new cuentas_model();
            $cuentas->eliminar($id);
            $data["titulo"] = "Cuentas";
            $this->index();
        }	
    }
?>
