<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}

$id=$_GET['id'];

require_once('librerias/conexionBD.php');

$sql = "select * FROM permisos WHERE id='$id'";
$buscar=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($buscar);

$id_usuario = $fila['id_usuario'];
$id_rol     = $fila['id_rol'];


$sql = "select * from usuarios";
$result =  $conn->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}

$sql = "select * from roles";
$result =  $conn->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}

require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nueva Calificacion</h1>        
                <form action="guardar-permiso.php" method="post">
              
                  <div class="form-group">
                    <label for="">Usuarios</label>
                    <select name="id_usuario" class="form-control">
                      <option value="">-- Seleccione --</option>
                      <?php foreach ($usuarios as $item): ?>
                        <option value="<?= $item['id'] ?>" <?=$item['id']==$id_usuario ? 'selected' : ''?> ><?= $item['usuario'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Roles</label>
                    <select name="id_rol" class="form-control">
                      <option value="">-- Seleccione --</option>
                      <?php foreach ($roles as $item): ?>
                        <option value="<?= $item['id'] ?>" <?=$item['id']==$id_rol ? 'selected' : ''?>><?= $item['descripcion'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <a href="permisos.php" class="btn btn-danger" role="button">Cancelar</a>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>