<?php 
require_once('librerias/conexionBD.php');

if(isset($_GET['id'])){
	$id= (int) $_GET['id'];
	$borrar = "DELETE FROM permisos WHERE id='$id'";
	$guardar = mysqli_query($conn, $borrar);
	header('Location: permisos.php');
}else{
	echo "Error no se borrar";
	header('Location: permisos.php');
}
