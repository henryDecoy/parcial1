<?php 
 class carrousel {
    public $txtprin=array();
    public $txtsub= array();
    public $imgs= array();


    public static function mostrar($txtprin,$txtsub,$imgs ){ ?>
        <!doctype html>
        <html lang="en">
        <body>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php for($i=1;$i<=Count($txtprin);$i++){ ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>" aria-label="Slide <?php echo $i+1 ?>"></button>
                    <?php }  ?>
                    
            

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="<?php echo $imgs[0] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $txtprin[0] ?></h5>
                            <p><?php echo $txtsub[0] ?></p>
                        </div>
                    </div>
                    <?php for($i=1;$i<count($txtprin);$i++){ ?>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="<?php echo $imgs[$i] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $txtprin[$i] ?></h5>
                            <p><?php echo $txtsub[$i] ?></p>
                        </div>
                    </div>
                    <?php } ?>

                   
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </body>
        </html>
    <?php
    }
    




 }



?>