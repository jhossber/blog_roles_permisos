<?php 
$host = 'localhost';
$user = 'admin';
$pass = 'admin';
$bdat = 'bd_blog';

$conn = new mysqli($host,$user,$pass,$bdat);

if ($conn->connect_errno > 0){
    die('Error de conexion ' . $conn->connect_error);
}
?>