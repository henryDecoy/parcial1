
<?php 

class listado_controllers{
    public $articulo=array();
    public $precio=array();


    public static function factura($articulo,$precio){ ?>
        <!doctype html>
        <html lang="en">
        <body>
            <div class="container-sm">
            <h1>Factura articulos seleccionados</h1>

            <table class="table table-warning table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php $sumatoria=0;
                    for($i=0;$i<Count($articulo);$i++ ){?>                
                    <tr>
                        <td scope="row"><?php echo $articulo[$i] ?> </td>
                        <td><?php echo $precio[$i] ?></td>   
                    </tr>
                         <?php $sumatoria+=$precio[$i]; } ?>
                    <hr>
                    <tr>
                        <td scope="row"><b><?php echo "Total a paga" ?> </b></td>
                        <td><?php echo $sumatoria ?></td>   
                    </tr>
                </tbody>
            </table>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
    <?php }

}
?>
