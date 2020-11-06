<?php 
require_once('librerias/conexionBD.php');

$id=$_POST['id'];
$id_usuario = $_POST['id_usuario'];
$id_rol = $_POST['id_rol'];

if (is_null($id)) {
	$sql = "insert into permisos (id_usuario, id_rol) values ($id_usuario, $id_rol)";
}else{
	$sql = "UPDATE permisos SET id_usuario='$id_usuario', id_rol='$id_rol' WHERE id='$id'";
}

$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: permisos.php');
?>