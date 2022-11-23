<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
<!--CSS Bootstrap-->
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
    <h2>Catálogo</h2>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand hover" href="catalogo.php?id=sc#contenido">Sillón Capri</a>
            <a class="navbar-brand hover" href="catalogo.php?id=mi#contenido">Mesa Ipanema</a>
            <a class="navbar-brand hover" href="catalogo.php?id=bv#contenido">Banco Venecia</a>
        </div>
    </nav>

    <?php 
        if(isset($_GET['id'])){
            switch($_GET['id']){
                case 'sc':
                    $img='sillon1.jpg';
                    $title='Sillón Capri';
                    $precio= '$ 345.00';
                    $info='Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                break;
                case 'mi':
                    $img='ipanema.jpg';
                    $title='Mesa Ipanema ';
                    $precio= '$ 500.00  ';
                    $info='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                break;
                case 'bv':
                    $img='venecia.jpg';
                    $title='Banco Venecia';
                    $precio= '$ 450.00';
                    $info='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                break;
            }
    ?>

    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="imagenes/catalogo/<?php echo $img; ?>" class="img-fluid rounded-start" alt="imagen" style="margin-top: 40px;">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?php echo $title; ?></h5>
            <p class="card-text"><?php echo $precio; ?></p>
            <p class="card-text"><?php echo $info; ?></p>
        </div>
        </div>
    </div>
    </div>       
            <?php } ?>

    </section>
<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a>
</footer>
</section>
</body>
</html>