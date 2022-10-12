<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Parcial 1</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://parcial1.com/"><i class="bi bi-code"></i> Parcial 1 Problema 2 <i class="bi bi-code-slash"></i> </a>
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
                </ul>
            </div>
        </div>
    </nav>
<br>
    <div class="container-sm">
        <h1>Parcial N°1</h1>
        <p>2. Crear una clase llamada Carrousel (snippets b5-carousel-captinos), que permita generar un 
            carrousel de manera dinámica que permita:
                <br> • <b> Generar dinámicamente la cantidad de sliders.</b> Utilizar un arreglo como atributo o parámetro.
                <br> • <b>Generar dinámicamente las imágenes de cada sliders.</b>  Las imágenes deben estar guardadas 
                    localmente. Utilizar un arreglo como atributo o parámetro. 
                <br> <b> • Generar dinámicamente el texto principal de cada slider y la descripción de cada uno.</b> Utilizar un arreglo como atributo o parámetro.
                <br> Al invocar un método llamado mostrar se va a devolver el HTML del carrousel de acuerdo a los 
                    parámetros configurados. Puede usar un método estático o utilizar un objeto para invocarlo. Los datos 
                    ya van a estar cargados, solo al invocar el método se debe mostrar el carousel.</p>
    </div>


<div class="container-sm">
    

    <?php 
    
   require_once("controllers/carrousel_controller.php");
    $obj = new carrousel();

   ?>

    <!--  Lectura de la informacion -->
    <div class="container">
   <form class="form-inline" action="" method="post" >
        <input type = "submit" name = "Calcular" value = "Crear el carousel" >
    </form > <br>
    </div>
        <!-- calculo usando el codigo de php-->
        <?php
            if(isset($_POST['Calcular'])) {
                require_once("models/info_models.php");
                echo carrousel::mostrar($txtprin,$txtsub,$imgs);
            }
                    
            ?>      
            
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>