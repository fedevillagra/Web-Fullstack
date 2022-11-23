<?php include('captcha_code.php'); ?>
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
		<h2>Consultas</h2>

		<!-- Formulario con captcha -->
		<form method="POST" action="cargar.php">
			<div class="row g-3">
				<div class="col-md">
					<div class="form-floating mb-3">
						<input type="text" name="nombre" class="form-control" id="floatingInputGrid" placeholder="Nombre" maxlength="20" required>
						<label for="floatingInputGrid">Nombre</label>
					</div>
				</div>
				<div class="col-md">
					<div class="form-floating mb-3">
						<input type="text" name="apellido" class="form-control" id="floatingInputGrid" placeholder="Apellido" maxlength="40" required>
						<label for="floatingInputGrid">Apellido</label>
					</div>
				</div>
			</div>
			<div class="form-floating mb-3">
				<input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" maxlength="100" required>
				<label for="floatingInput">Email</label>
			</div>
			<div class="form-floating mb-3">
				<textarea name="consulta" class="form-control" placeholder="Consulta" id="floatingTextarea2" style="height: 100px" required></textarea>
				<label for="floatingTextarea2">Consulta</label>
			</div>
			<div class="row g-3 align-items-center mb-3">
				<div class="col-auto">
					<img src="captcha_image.php"> <!-- Imagen captcha -->
				</div>
				<div class="col-auto">
					<input type="text" name="codigo_captcha" maxlength="5" required>
				</div>
				<div class="col-auto">
					<span id="passwordHelpInline" class="form-text">
						Complete el captcha.
					</span>
				</div>
			</div>
			<button type="submit" class="btn btn-outline-danger">Enviar</button>
		</form>

		<!-- Luego de la verificacion del captcha-->
		<?php
			if(isset($_GET['OK'])){
				echo "<script type='text/javascript'>
						alert('Consulta enviada.');
						window.location.replace('unidad5.php');
					</script>";
			}else if(isset($_GET['error'])){
		?>  		<script type='text/javascript'>
						alert('\rCodigo captcha incorrecto.\n\r Por favor ingrese el codigo correctamente.');
						window.location.replace('unidad5.php');
					</script>";
		<?php }
      	?>


	</section>
	<aside>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
</body>
</html>