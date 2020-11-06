<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}

$id=$_GET['id'];

require_once('librerias/conexionBD.php');

$sql = "select * FROM roles WHERE id='$id'";

$buscar=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($buscar);
$descripcion = $fila['descripcion'];

require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Editar Rol</h1>        
                <form action="guardar-rol.php" method="post">
                  <input type="hidden" name="id" value="<?= $id?>">
                  <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" value="<?= $descripcion ?>">
                  </div>
                  <a href="roles.php" class="btn btn-danger" role="button">Cancelar</a>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>