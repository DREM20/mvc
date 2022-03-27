<?php

if($_SESSION['autenticado'] !=1){
header('Location:index.php');
}
//si no se a autenticado, lo regresa a index para que se autentique
?>