<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<!-- CSS bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- lightbox css -->
	<link href="lightbox/css/lightbox.css" rel="stylesheet" />
</head>
<body>
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section style="margin-bottom:50px;">
		<h2>Imágenes con PHP</h2>

		<!-- Marca de agua-->
		<h2 style="font-size:medium;">Imagen con marca de agua:</h2> 
		<img src="marca_agua.php" class="img-fluid" alt="perro">

	</section>
	<aside>

		<!-- Thumbnail -->
		<h2 style="font-size:medium;">Imagen thumbnail:</h2>
		<a data-lightbox="image-1" data-title="Imagen original" href="img/unidad4.jpg">
			<img src="img/unidad4_thumbnail.jpg">
		</a>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
<!-- lightbox js -->
<script src="lightbox/js/lightbox-plus-jquery.js"></script>
<script src="lightbox/js/lightbox.js"></script>
</body>
</html>