<?php 
require_once('librerias/conexionBD.php');

$id=$_POST['id'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$clave = md5($_POST['clave']);

if (is_null($id)) {
	$sql = "insert into usuarios (usuario, correo, clave) values ('$usuario', '$correo', '$clave')";
}else{
	$sql = "UPDATE usuarios SET usuario='$usuario', correo='$correo', clave='$clave' WHERE id='$id'";
}

$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: usuarios.php');
?>