<?php
include("conexion.php");
    $ID=$_REQUEST['ID'];
    $borrar="DELETE FROM datos  WHERE ID='".$ID."'";    
    $resultado=$conexion->query($borrar);
     if($resultado){
    	header("Location: Tabla.php");
     }else{
        echo "Error al insertar";
     }
?>