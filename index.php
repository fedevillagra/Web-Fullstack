<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Welcome</title>
    <link href="styles.css" rel="stylesheet" type="text/css"/>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--icono de la pagina-->
    <link rel="icon" href="img/logo.png">
</head>
<body>
    <header>
        <div class="col-7 offset-5 mb-3 mt-3">
            <h1 id="title">Hi world</h1>
        </div>
    </header>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4" id="scale1" onmouseover="zoom('scale1')" onmouseout="zoom('scale1')" onclick="window.open('unidad12', '_blank');" style="cursor: pointer;">
                    <div class="card bg-light text-white">
                        <img src="img/pexels-pixabay-39284.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay" style="margin-top: 100px; margin-bottom: 100px;">
                            <h5 class="card-title title_fixed col-9">Programacion web inicial</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4" id="scale2" onmouseover="zoom('scale2')" onmouseout="zoom('scale2')" onclick="window.open('unidad_8', '_blank');" style="cursor: pointer;">
                    <div class="card bg-light text-white">
                        <img src="img/laptop-g2b429d42c_1280.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay" style="margin-top: 100px; margin-bottom: 100px;">
                          <h5 class="card-title title_fixed col-11">Programación Web con PHP y MySQL</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4" id="scale3" onmouseover="zoom('scale3')" onmouseout="zoom('scale3')" onclick="window.open('unidad-8', '_blank');" style="cursor: pointer;">
                    <div class="card bg-light text-white">
                        <img src="img/coding-g7fb69b254_1280.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay" style="margin-top: 100px; margin-bottom: 100px;">
                          <h5 class="card-title title_fixed col-12">Programación con PHP y MySQL - Nivel Avanzado</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </section>
    <script type="text/javascript" src="js/scale.js"></script>
</body>
</html>