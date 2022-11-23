<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<!-- CSS bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section style="margin-bottom: 80px;">
		<h2>Comentarios</h2>

		<!-- imprimir los comentarios -->
		<div class="list-group">
			<?php
				$nombre="comentarios.txt";
				$f=fopen($nombre,"r") or die("error al abrir el archivo: $nombre");
				fpassthru($f);
				fclose($f);
			?>
		</div>

	</section>
	<aside>

		<!-- Formulario con bootstrap -->
		<h2 style="font-size:x-large;">Hacer un comentario</h2>
		<form class="row g-3 mb-3" method="POST" action="comentarios.php">
			<div class="col-md-12">
				<label for="exampleFormControlInput1" class="form-label">Nombre y Apellido</label>
				<input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Apellido" required>
			</div>
			<div class="col-md-12">
				<label for="exampleFormControlInput2" class="form-label">Mail</label>
				<input type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="nombre@ejemplo.com" required>
			</div>
			<div class="col-md-12">
				<label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
				<textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3" placeholder="Escriba aquí..." required></textarea>
			</div>
			<div class="col-md-12">
    			<button type="submit" class="btn btn-danger" id="liveAlertBtn">Enviar</button>
  			</div>
		</form>
		
		<!-- Informar que se enviaron los datos-->
		<?php if(isset($_GET['OK'])){ ?>
			<div class="alert alert-success alert-dismissible" role="alert" id="liveAlertPlaceholder">
  				Comentario enviado!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php } ?>

  	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
<!-- JS bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>