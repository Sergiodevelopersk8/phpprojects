<?php 
include('../php/conexion.php');
include('../php/funciones.php');


if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['direccion']) && isset($_POST['estado']) && isset($_POST['cp']) && isset($_POST['password'])){
	
	$nombre=mysqli_real_escape_string($conexion,$_POST['nombre']);
	$apellidos=mysqli_real_escape_string($conexion,$_POST['apellidos']);
	$email=mysqli_real_escape_string($conexion,$_POST['email']);
	$direccion=mysqli_real_escape_string($conexion,$_POST['direccion']);
$estado=mysqli_real_escape_string($conexion,$_POST['estado']);
	$cp=mysqli_real_escape_string($conexion,$_POST['cp']);
	$telefono=mysqli_real_escape_string($conexion,$_POST['telefono']);
	$password=mysqli_real_escape_string($conexion,$_POST['password']);
}
//------------------------------------------------------//
	
	$nombre=ucwords($nombre);
	$apellidos=ucwords($apellidos);
	
	
	$nombre=utf8_decode($nombre);
	$apellidos=utf8_decode($apellidos);
	$email=utf8_decode($email);
	$direccion=utf8_decode($direccion);
	$estado=utf8_decode($estado);
	$cp=utf8_decode($cp);
	$telefono=utf8_decode($telefono);
	$password=utf8_decode($password);  
/*	$password = md5($password);*/

	
	mysqli_query($conexion,"INSERT INTO clientes (nombre,apellidos,email,direccion,cp,estado,telefono,password) VALUES 
	('$nombre','$apellidos','$email','$direccion','$cp','$estado','$telefono','$password')");


	


cerrarconexion();
?>