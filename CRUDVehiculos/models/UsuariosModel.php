<?php


   class usuarios_model{
      //session_start();
    private $db;
    private $usuarios;
    
    public function __construct(){
        $this->db = Conectar::conexion();
        $this->usuarios = array();
   }

    
   public function get_usuarios($nombre, $contrasenia)
   {
 $sql="SELECT * FROM usuarios WHERE nombre='$nombre' and contrasenia='$contrasenia' ";
 $resultadoNombre = $this->db->query($sql);
 $acce='0';

if( ($resultadoNombre->num_rows) == 1 )
{
   $row = $resultadoNombre->fetch_array();

    
    if($row['tipoUsuario'] =='1'){
      $acce="1";
     
    }
    else{
      $acce="2";
    }
}

return $acce;
   }}
?>

