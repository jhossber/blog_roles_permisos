<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}
require_once('librerias/conexionBD.php');

$sql = "select p.*, u.usuario as usuario, r.descripcion as rol
from permisos p 
INNER JOIN usuarios u on u.id = p.id_usuario
INNER JOIN roles r on r.id = p.id_rol ORDER BY p.id ASC";

$result =  $conn->query($sql);
$permisos = array();
while ($fila =  $result->fetch_array()) {
    $permisos[] = $fila;
}
require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Permisos</h1>
                <p>
                    <a href="crear-permisos.php" class="btn btn-success">Nuevo</a>
                </p>  
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($permisos as $item): ?>
                    <tr>
                        <td><?= $item['id']?></td>
                        <td><?= $item['usuario']?></td>
                        <td><?= $item['rol']?></td>
                        <td>
                            <a href="editar-permiso.php?id=<?= $item['id']; ?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="borrar-permiso.php?id=<?= $item['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>   
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>
