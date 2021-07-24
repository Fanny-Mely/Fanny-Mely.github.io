<?php 
session_start();

if (isset($_SESSION['usuario'])) {
	include "header.php";
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12" style="text-align: center;">
				<div class="jumbotron">
					<h1 class="display-4">MISIÓN</h1>
					<p class="lead">Somos una organización que coordina instituciones y asociaciones de rehabilitación a nivel nacional; 
					que desarrolla procesos de incidencia para el cumplimiento de los derechos humanos, promueve el liderazgo, facilita 
					 procesos de consenso y concertación para el fortalecimiento institucional  que permita la prestación de servicios de
					  prevención, detección, atención y rehabilitación integral que garantice los procesos de desarrollo e  inclusión de 
					  las personas con discapacidad.</p>
				    <h1 class="display-4">VISIÓN</h1>
					<p class="lead">Consolidarse como una organización referente en el área de prevención, detección, atención, 
					rehabilitación integral, líder en la defensa, educación, promoción y cumplimiento de los derechos humanos de 
					las personas con discapacidad.</p>
					<hr class="my-4">
					<p><img src="../img/logobr.jpg" class="img-thumbnail" width="1500px" height="200px";/></p>
					<p class="lead">
						
					</p>
				</div>


			</div>
		</div>
	</div>

	<?php
	include "footer.php"; 
} else {
	header("location:../index.php");
}
?>