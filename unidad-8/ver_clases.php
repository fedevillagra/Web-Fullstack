<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- CSS bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	<link rel="stylesheet" href="estilos.css">
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
		<h2>Clases</h2>

        <?php
            include("conection.php");
            $consultar_clases=mysqli_query($base,"SELECT * FROM clases");
        ?>
            <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Unidad</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
            <?php
                for($i=0;$i<mysqli_num_rows($consultar_clases);$i++){
                    $mostrar_clases=mysqli_fetch_assoc($consultar_clases);
                    echo '<tr><td>'.$mostrar_clases["unidad"].'</td>'; 
                    echo '<td>'.$mostrar_clases["fecha"].'</td></tr>';
                }
                mysqli_free_result($consultar_clases);
            ?>
            </tbody>
        </table> 
            <a class="btn btn-outline-danger" href="unidad1.php" role="button">Volver</a>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>