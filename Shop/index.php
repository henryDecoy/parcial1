<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Shop</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://parcial1.com/"><i class="bi bi-code"></i>S<i class="bi bi-diamond"></i>H<i class="bi bi-diamond-half"></i>O<i class="bi bi-diamond-fill"></i>P<i class="bi bi-code-slash"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/prob2/index.php">Resolusion del problema 2 </a></li>
                            <li><a class="dropdown-item" href="/shop/index.php">Tienda de articulos</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="http://parcial1.com/">Home page</a></li>
                    </ul>
                </li>
                 
                <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://parcial1.com/shop/controllers/listado_controllers.php"><button type="button" class="btn btn-warning"> Ver Factura</button></a> 
                </li>-->

            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
            
        </div>
    </div>
</nav>


<!-- calculo usando el codigo de php-->
<?php 
    require_once("controllers\carousel_controllers.php");
    require_once("models/contenido_models.php");
    $obj1 = new carousel_controllers();
    echo carousel_controllers::mostrar($txtprin,$txtsub,$imagenes); ?>    


    <div class="container-sm">
    <br><h1 class="text-center"><b> <i class="bi bi-code"></i>S<i class="bi bi-diamond"></i>H<i class="bi bi-diamond-half"></i>O<i class="bi bi-diamond-fill"></i>P<i class="bi bi-code-slash"></i></b></h1>
        <h3 class="text-center"><b>Tu tienda de Plantillas para mejorar tu Marca</b></h3>
    </div>

    <br><br><br>

    <?php 

    require_once("controllers\productos_controller.php");
    $obj2 = new productos_controller();
    echo productos_controller::articulos($product_imgs,$product_titulo,$product_desc,$product_precio); ?>
    
    <br><hr><br>

    <?php 
    /*require_once("controllers\listado_controllers.php");
    $obj3= new listado_controllers();
    echo listado_controllers::factura($product_titulo,$product_precio) */
    ?> 

  
    
  <div class="container-md">
    <ul class="nav    ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Todos los derechos reservados - 2022</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contáctanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Siguenos en redes sociales </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-instagram"></i> <i class="bi bi-twitter"></i> <i class="bi bi-whatsapp"></i> <i class="bi bi-git"></i> <i class="bi bi-github"></i></a>
                </li>
            </ul>
  </div>


  



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>