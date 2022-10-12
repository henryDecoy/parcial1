<?php 

class productos_controller{
    public $product_imgs=array();
    public $product_titulo=array();
    public $product_desc=array();
    public $product_precio=array();


    public static function articulos ($product_imgs,$product_titulo,$product_desc,$product_precio){ 
        $posicion=array();
        ?>
        <!doctype html>
        <html lang="en">
        <body>
            <div class="container-sm">
                <div class="row">
                    <?php    
                    for($i=0;$i<count($product_imgs);$i++){?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                        <img src="<?php echo $product_imgs[$i] ?>" class="img-fluid" alt="...">
                            <div class="card-body text-success">
                                <h5 class="card-title"><?php echo $product_titulo[$i] ?></h5>
                                <p class="card-text"><?php echo $product_desc[$i] ?></p>
                                <p class="card-text"><?php echo $product_precio[$i] ?></p>
                                <hr>
                                <form action="" method="post">
                                    <input type="hidden" name="Calcular" value="<?php echo $i  ?>">
                                    <button class="btn btn-outline-success">
                                        <i class="bi bi-cart-plus"></i>&nbsp;Agregar al carrito
                                    </button>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i ?>">
                                    <i class="bi bi-eye"></i>
                                    </button>
                                </form>
                                    
                                
                                
                               <!-- Modal -->
                               <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $product_titulo[$i] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="text-align: center;">
                                            <img src="<?php echo $product_imgs[$i] ?>" alt="" >
                                        </div>
                                        <div class="modal-footer">
                                            <p>Copyright (c) 2021 ShopTemplates
                                                <br> All Rights Reserved</p>
                                        </div>
                                    </div>
                                </div>
                               </div>
                             
                                
                            </div>
                        </div>
                        </div>



                    <?php }   
                    $p=0;
                    if(isset($_POST['Calcular'])) { 
                        if($p==0){
                        $posicion[]=$_POST['Calcular'];
                        $p+=1;}
                        elseif($p==1){
                        $posicion[]=$_POST['Calcular'];
                        }
                        ?>
                    <hr>
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
                            for($i=0;$i<Count($posicion);$i++ ){?>                
                            <tr>
                                <td scope="row"><?php echo $product_titulo[$posicion[$i]] ?> </td>
                                <td><?php echo $product_precio[$posicion[$i]] ?></td>   
                            </tr>
                                <?php $sumatoria+=$product_precio[$posicion[$i]]; } ?>
                            <hr>
                            <tr>
                                <td scope="row"><b><?php echo "Total a paga" ?> </b></td>
                                <td><?php echo $sumatoria ?></td>   
                            </tr>
                        </tbody>
                    </table>
                    </div>
                       <?php } ?>       
                    
                </div>     
            </div>
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </body>
        </html>
   <?php }
}
?>
