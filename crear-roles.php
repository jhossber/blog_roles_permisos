<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}

require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nuevo Rol</h1>        
                <form action="guardar-rol.php" method="post">
                  <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" >
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