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
		<h2>Usuarios</h2>

		<!-- Formulario con bootstrap -->
		<form method="POST">
			<div class="row g-2">
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text bg-danger " id="inputGroup-sizing-default" style="color: white;">Nombre</span>
						<input type="text" name="nombre" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text bg-danger " id="inputGroup-sizing-default" style="color: white;">Apellido</span>
						<input type="text" name="apellido" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text bg-danger " id="inputGroup-sizing-default" style="color: white;">Edad</span>
						<input type="number" name="edad" min="1" max="110" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
				</div>
				<div class="col-12 mb-3">
					<button type="submit" class="btn btn-outline-secondary">Enviar</button>
				</div>
			</div>
		</form>

	</section>
	<aside>

    	<!-- Se imprime los datos ingresados por el usuario -->
		<?php
			include('clases/usuarios.php');
			if($_POST){
				$usuario= new Usuarios($_POST['nombre'],$_POST['apellido'],$_POST['edad']);
				$usuario->imprime_carcteristicas();
			}
		?>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
</body>
</html>