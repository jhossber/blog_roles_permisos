<?php 
require_once('librerias/conexionBD.php');

$id=$_POST['id'];
$descripcion = $_POST['descripcion'];

if (is_null($id)) {
	$sql = "insert into roles (descripcion) values ('$descripcion')";
}else{
	$sql = "UPDATE roles SET descripcion='$descripcion' WHERE id='$id'";
}

$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: roles.php');
?>