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
	<section>
		<h2>Agenda de clases</h2>
		<p id="subtitle">Añade tus clases a la agenda</p>
		
		<!-- form bootstrap -->
		<form class="row g-3" method="POST" action="insertar_clases.php">
			<div class="col-md-6">
				<label class="form-label">Unidad</label>
				<input type="text" name="unidad" class="form-control" maxlength="30" required>
			</div>
			<div class="col-md-6">
				<label class="form-label">Fecha</label>
				<input type="date" name="fecha" class="form-control" required>
			</div>
			<div class="col-md-12">
				<button type="submit" class="btn btn-danger">Agregar</button>

			</div>
		</form>

	</section>
	<aside>
		<div class="d-grid gap-2">
			<a class="btn btn-danger " href="ver_clases.php" role="button">Ver clases</a>
		</div>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>