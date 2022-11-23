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
    <h2>Noticias</h2>

    <?php 
        $noticias= array(
            array('title'=>'F.B.I. Secretly Bought Israeli Spyware and Explored Hacking U.S. Phones','text'=>'Israel used the NSO Group’s software as a tool of diplomacy. The F.B.I. wanted it for domestic surveillance. Then everything soured. Here are highlights of a New York Times Magazine investigation.','img'=>'27xp-pegasustakeaways-jumbo.jpg'),
            array('title'=>'Apple’s profit jumps to $34.6 billion in holiday quarter despite supply issues.','text'=>'The company’s revenue and profit beat Wall Street expectations, easing concerns that supply chain problems and the coronavirus were a drag on sales.','img'=>'merlin_199719732_5d7cd1f1-8dd4-4cc8-a976-7acf9fb23944-jumbo.jpg'),
            array('title'=>'The Times hits its goal of 10 million subscriptions with the addition of The Athletic.','text'=>'The deal for the sports site, which was completed on Tuesday, helped the company reach that goal a couple of years early.','img'=>'merlin_187720779_c72d0434-982d-4c2f-999d-580034db9f93-jumbo.jpg'),
            array('title'=>'Why Is Silicon Valley Still Waiting for the Next Big Thing?','text'=>'The tech industry has grown ever more rich off big ideas that were developed more than a decade ago. New things like quantum computing and self-driving cars could take a while.','img'=>'12innovation-print-superJumbo.jpg')
        );
    ?>

    <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php 
        for($i=0; $i<count($noticias); $i++){
    ?>
  <div class="col">
    <div class="card">
      <img src="imagenes/noticias/<?php echo $noticias[$i]['img']; ?>" class="card-img-top" alt="img">
      <div class="card-body">
        <h5 class="card-title"><?php echo $noticias[$i]['title']; ?></h5>
        <p class="card-text"><?php echo $noticias[$i]['text']; ?></p>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
   
    </section>
<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>