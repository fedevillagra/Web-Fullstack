<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
<!-- CSS bootstrap -->
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
    <h2>Clientes</h2>

        <?php
            include("conection.php");
            $result=mysqli_query($base,"SELECT * FROM pedidos_cliente");
        ?>
            <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
            <?php
                for($i=0;$i<mysqli_num_rows($result);$i++){
                    $row=mysqli_fetch_assoc($result);
                    echo '<tr><th scope="row">'.$row["id_pedido"].'</th>'; 
                    echo '<td>'.$row["producto"].'</td>';
                    echo '<td>'.$row["cantidad"].'</td>';
                    echo '<td>$'.$row["precio"].'</td></tr>';
                }
                mysqli_free_result($result);
            ?>
            </tbody>
        </table>           
    </section>
<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a>
</footer>
</section>
</body>
</html>