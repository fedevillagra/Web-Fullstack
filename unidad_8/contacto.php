<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
<!-- CSS boostrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos</h2>

    <form method="POST" action="enviar_consulta.php" class="row g-3 needs-validation" novalidate>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="validationCustom01" placeholder="Nombre" maxlength="20" required>
    <div class="invalid-feedback">
      Nombre incompleto.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" name="apellido" class="form-control" id="validationCustom02" placeholder="Apellido" maxlength="40" required>
    <div class="invalid-feedback">
      Apellido incompleto.
    </div>
  </div>
  <div class="col-md-2">
    <label for="validationCustom03" class="form-label">Edad</label>
      <input type="number" name="edad" class="form-control" id="validationCustom03" placeholder="13-105" min="13" max="105">
      <div class="invalid-feedback">
        Edad no válida.
      </div>
    </div>
  </div>
  <div class="col-md-10">
    <label for="validationCustom04" class="form-label">Correo Electrónico</label>
    <input type="email" name="correo" class="form-control" id="validationCustom04" placeholder="nombre@ejemplo.com" maxlength="100" required>
    <div class="invalid-feedback">
      Correo no válido.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationTextarea" class="form-label">Motivo de la consulta</label>
    <textarea class="form-control" name="motivo" id="validationTextarea" placeholder="Escriba aqui..." rows="8" required></textarea>                                      
  </div>
  <div class="col-md-8">
    <label for="validationTextarea" class="form-label">Mensaje</label>
    <textarea class="form-control" name="mensaje" id="validationTextarea" placeholder="Escriba aqui..." rows="8" required></textarea>                                      
  </div>
  <div class="col-12">
    <button class="btn btn-dark" type="submit">Enviar</button>
  </div>
</form>

      <?php
        if(isset($_GET['OK'])){
          echo "<script type='text/javascript'>
            alert('Mensaje enviado.');
            window.location.replace('contacto.php#contenido');
          </script>";
        }
      ?>
   
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
<!--form bootstrap-->
<script type="text/javascript" src="js/form.js"></script>
</body>
</html>