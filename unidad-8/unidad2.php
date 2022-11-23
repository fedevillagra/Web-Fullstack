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
		<h2>Eventos</h2>
		<p id="subtitle">Averigua cuantos días faltan</p>

		<!-- Formulario con bootstrap -->
		<form method="POST" action="calculo_fecha.php">
			<div class="row g-2">
				<div class="col-md">
					<div class="form-floating">
					<input type="number" name="day" class="form-control" id="floatingInputGrid" required>
					<label for="floatingInputGrid">Día</label>
					</div>
				</div>
				<div class="col-md">
					<div class="form-floating">
					<input type="number" name="month" class="form-control" id="floatingInputGrid" required>
					<label for="floatingSelectGrid">Mes</label>
					</div>
				</div>
				<div class="col-md">
					<div class="form-floating">
					<input type="number" name="year" class="form-control" id="floatingInputGrid" required>
					<label for="floatingSelectGrid">Año</label>
					</div>
				</div>
				<div class="col-12">
					<button type="submit" class="btn btn-danger">Consultar</button>
				</div>
			</div>
		</form>

	</section>
	<aside>
		<!-- Imprime cuanto falta para la fecha ingresada-->
		<?php 
			if(isset($_GET['dias'])){
				$dias=$_GET['dias'];
				if($dias>0){
					$fecha=$_GET['fecha'];
					echo '<table class="table">
							<thead class="table-dark">
								<tr>
									<th scope="col">Fecha ingresada</th>
									<th scope="col">Días restantes</th>
								</tr>
							</thead>
							<tbody>
									<tr><td>'.$fecha.'</td>
									<td>'.$dias.' días</td></tr>
							</tbody>
						</table>';
				}else{
					echo 'Ingrese una fecha posterior a la de hoy!';
				}
			}else if(isset($_GET['fecha_invalida'])){
				echo 'Ingrese una fecha valida!';
			}
		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
</body>
</html>