<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
  	<!-- CSS bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- icons -->
	<link href="icons.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section style="margin-bottom: 30px;">
		<h2>Compras</h2>

		<!-- Tabla con los productos -->
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th scope="col">Código</th>
					<th scope="col">Producto</th>
					<th scope="col">Descripción</th>
					<th scope="col">Precio</th>
					<th scope="col">Comprar</th>
				</tr>
			</thead>
		<?php
			include('recursos.php');
			$listar_datos=$producto->seleccionarProductos();
			for ($i=0; $i < count($listar_datos); $i++) { 
		?>
			<tbody>
				<tr>
					<td><?php echo $listar_datos[$i]['codigo']; ?></td>
					<td><?php echo $listar_datos[$i]['producto']; ?></td>
					<td><?php echo $listar_datos[$i]['descripcion']; ?></td>
					<td>$<?php echo $listar_datos[$i]['precio']; ?></td>
					<td><a href="agregar_carrito.php?code=<?php echo $listar_datos[$i]['codigo']; ?>" id="buy_icon"><span class="icon-shopping-cart" id="icon_center"></span></a></td>
				</tr>
			</tbody>
		<?php	}	?>
		</table>

	</section>
	<aside>

	<!-- carrito -->
	<h2 style="text-align:center">Carrito de compras</h2>
		<?php 
			$listar_datos=$carrito->listarCarrito();
			if (empty($listar_datos)){
				echo "<h5>Agrega productos al carrito!</h5>";
			}else{
		?>
	<table class="table">
		<thead class="table-dark">
			<tr>
				<th scope="col">Producto</th>
				<th scope="col">Precio</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<?php
			$total=0;
			for ($i=0; $i < count($listar_datos); $i++) { 
				$total+=$listar_datos[$i]['precio'];
		?>
		<tbody>
			<tr>
				<td><?php echo $listar_datos[$i]['producto']; ?></td>
				<td>$<?php echo $listar_datos[$i]['precio']; ?></td>
				<td><a href="eliminar_carrito.php?code=<?php echo $listar_datos[$i]['codigo']; ?>" id="cross_icon"><span class="icon-close" id="icon_center2"></span></a></td>
			</tr>
		</tbody>
		<?php	}	$total_formato = number_format($total, 2, '.', '');	?> 
		<tbody>
			<tr>
				<td>Total</td>
				<td>$<?php echo $total_formato; ?></td>
				<td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Pagar</button></td>
			</tr>
		</tbody>
	<?php	}	?>
	</table>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Compra</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Seguro que quieres comprar estos productos?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger">Aceptar</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
<!-- JS bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>