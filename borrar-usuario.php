<?php 
require_once('librerias/conexionBD.php');

if(isset($_GET['id'])){
	$id= (int) $_GET['id'];
	$borrar = "DELETE FROM usuarios WHERE id='$id'";
	$guardar = mysqli_query($conn, $borrar);
	header('Location: usuarios.php');
}else{
	echo "Error no se borrar";
	header('Location: usuarios.php');
}
