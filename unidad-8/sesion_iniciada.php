<?php
session_start();
if (!isset($_SESSION['correo'])){
	header("Location: unidad8.php");
}else{
?>
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
        <h2>
            <?php
                switch ($_SESSION['sexo']) {
                    case 'Hombre':
                        echo 'Bienvenido ';
                        break;
                    case 'Mujer':
                        echo 'Bienvenida ';
                        break;
                    default:
                        echo 'Bienvenid@ ';
                        break;
                }
                echo $_SESSION['nombre'].' '.$_SESSION['apellido'].'!';
            ?>
        </h2>

        <h4>Información personal</h4><hr/>
		<h5>Mail: <span class="badge bg-danger"><?php echo $_SESSION['correo']; ?></span></h5>
        <h5>Fecha de nacimiento: <span class="badge bg-danger mb-3"><?php echo $_SESSION['nacimiento']; ?></span></h5>

        <a href="salir.php"><button type="button" class="btn btn-outline-danger">Salir</button></a>
	</section>
	<aside>
    	
 	</aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
</div>
</body>
</html>
<?php   }   ?>