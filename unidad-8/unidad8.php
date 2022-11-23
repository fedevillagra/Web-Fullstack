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
		<h2>Registrarte</h2>
		<p id="subtitle">Es rápido y fácil.</p><hr/>
		<!-- form registrar Bootstrap -->
		<form method="POST" action="register.php" class="row g-3 needs-validation" novalidate>
			<div class="col-md-6">
				<input type="text" name="nombre" class="form-control" id="validationCustom01" placeholder="Nombre" maxlength="20" required>
			</div>
			<div class="col-md-6">
				<input type="text" name="apellido" class="form-control" id="validationCustom02" placeholder="Apellido" maxlength="40" required>
			</div>
			<div class="col-md-12">
				<input type="email" name="mail" class="form-control" id="validationCustom03" placeholder="Correo electrónico" maxlength="100" required>
			</div>
			<div class="col-md-7">
			<p id="subtitle2">Contraseña</p>
				<input type="password" name="clave" class="form-control" id="validationCustom04" placeholder="Contraseña nueva" maxlength="20" required>
			</div>
			<div class="col-md-2">
				<p id="subtitle2">Sexo</p>
				<select class="form-select" name="sexo" id="validationCustom05" required>
					<option selected disabled value="">Elegir...</option>
					<option>Mujer</option>
					<option>Hombre</option>
					<option>Otro</option>
				</select>
			</div>
			<div class="col-md-3">
				<p id="subtitle2">Fecha de nacimiento</p>
				<input type="date" name="nac" class="form-control" id="validationCustom06" required>
			</div>
			<div class="col-7 offset-md-5">
				<button class="btn btn-danger" type="submit">Registrarte</button>
				<?php 
					if(isset($_GET['fecha_invalida'])){ //al ingresar una fecha posterior tira error
						echo '<p style="float: right; color: red;">Ingrese una fecha valida!</p>';
					}
				?>
			</div>
		</form>	
		<?php 
			if(isset($_GET['mail_ya_registrado'])){ //al ingresar un mail ya registrado tira error
				echo '<br/><p style="color: red;">El correo ingresado ya ha sido registrado anteriormente!</p>';
			}else if(isset($_GET['ok'])){ //registrado correctamente
				echo '<br/><p style="color: green;">Registrado correctamente!</p>';
			}
		?>
	</section>
	<aside>
    	<h2>Iniciar sesión</h2><hr/>
		<!-- form ingresar bootstrap-->
		<form method="POST" action="login.php" class="needs-validation" novalidate>
			<div class="mb-3">
				<input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Correo electrónico" required>
			</div>
			<div class="mb-3">
				<input type="password" name="clave" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" required>
			</div>
			<button type="submit" class="btn btn-danger">Iniciar sesión</button>
		</form>
		<?php 
			if(isset($_GET['error_correo'])){ //error al ingresar correo
				echo '<br/><p style="color: red;">El correo ingresado no está registrado!</p>';
			}else if(isset($_GET['error_clave'])){ //contra incorrecta
				echo '<br/><p style="color: red;">La contraseña es incorrecta!</p>';
			}
		?>
 	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
<!-- JS form -->
<script type="text/javascript" src="js/form.js"></script>
</body>
</html>