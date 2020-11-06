<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}

$id=$_GET['id'];

require_once('librerias/conexionBD.php');

$sql = "select * FROM usuarios WHERE id='$id'";

$buscar=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($buscar);

$usuario = $fila['usuario']; 
$correo = $fila['correo'];
$clave = $fila['clave'];

require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Editar usuario</h1>        
                <form action="guardar-usuario.php" method="post">
                  <input type="hidden" name="id" value="<?= $id?>">
                  <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="usuario" class="form-control" value="<?= $usuario ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" name="correo" class="form-control" value="<?= $correo ?>" >
                  </div>
                  <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="clave" class="form-control" value="<?= $clave ?>">
                  </div>
                  <a href="usuarios.php" class="btn btn-danger" role="button">Cancelar</a>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>