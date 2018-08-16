<?php

	include("conexion.php");
	
	$ID=$_REQUEST['ID'];
	$q=$_POST['nombre'];
	$w=$_POST['apellido'];
	$e=$_POST['correo'];
	$r=$_POST['tarjeta'];
	$t=$_POST['titular'];
	$y=$_POST['numero'];
	$u=$_POST['cvv'];
	$i=$_POST['fe'];
	$o=$_POST['direc'];
	$p=$_POST['ciu'];
	$a=$_POST['zip'];
	$s=$_POST['pais'];
	$d=$_POST['tel'];
	$f=$_POST['code'];
	$g=$_POST['pregu'];

	$insertar="UPDATE datos SET nombre='".$q."',apellido='".$w."',correo='".$e."',tarjeta='".$r."',titular='".$t."',numero='".$y."',cvv2='".$u."',fecha='".$i."',direccion='".$o."',ciudad='".$p."',zipcode='".$a."',pais='".$s."',telefono='".$d."',codigo='".$f."',pregunta='".$g."', WHERE ID='".$ID."'";
	$resultado=$conexion->query($insertar);
	if($resultado){
		header("Location: Tabla.php");
	}else{
		echo "Error al Ingresar Datos";
		header("Location: Tabla.php");
	}
?>