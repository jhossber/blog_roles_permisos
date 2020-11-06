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
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/img/carusel-1.jpg" class="d-block w-100" height="400" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/img/carusel-2.jpg" class="d-block w-100" height="400" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/img/carusel-3.jpg" class="d-block w-100" height="400" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>        
		</div>
	</div><br>

	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Segundo Percial de Emergentes I</h1>			
		</div><br><br><hr>
		<div class="col-md-6 col-sm-12">
			<img src="assets/img/logo2.png" alt="No hay Josber" class="img-thumbnail">
		</div>
		<div class="col-md-6 col-sm-12">
			<h2 class="text-center"><b>Datos Personales</b></h2>
			<h3>Nombres : <b>Jose Bernal</b> </h3>
			<h3>Apellidos : <b>Yujra Charca</b></h3>
			<h3>Asignatura : <b>Emergentes I</b></h3>
		</div>
	</div>
</div>
<?php 
require_once('librerias/pie.php');
?>
