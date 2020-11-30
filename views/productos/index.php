<?php require "views/shared/header.php"; ?>

<center>
    <div class="container">
        <img src="assets/img/menu.png" alt=""><br><br>
        <img src="assets/img/chefsito" alt=""><br><br>
        <div class="col-sm-12">
            <div class="features_items">
                <?php foreach($data['productos'] as $producto) { ?>
                    <form action="index.php?control=carro&action=store" method="post">
                        <!-- <div class="row"> -->
                            <div class="col-md-3">
                                <div class="card mb-4">
                                    <img class="card-img-top portfolio-card__image" src="<?= $producto['foto'] ?>" auto="compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
                                        <div class="card-body">
                                            <!-- <h6 class="card-subtitle mb-2 portfolio-card_category portfolio-cardcategory_offices">Offices</h6> -->
                                            <h4 class="card-title mb-2 portfolio-card__title"><?= $producto['nombre'] ?></h4>
                                            <p class="card-text portfolio-card__text"><?= $producto['descripcion'] ?></p>
                                            <p><span class="portfolio-card_stage portfolio-cardstageconstruction"><i class="fas fa-hammer portfolio-cardstage_icon"></i>$<?= $producto['precio'] ?></span></p>
                                            <button <?= $producto['identificador'] ?> class="btn btn-lg btn-block btn-outline-success">Agregar al carrito</button>
                                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                            <input type="hidden" name="identificador" id="identificador" method="post" value=<?php echo $producto['identificador']; ?>>
                                            <input type="hidden" name="precio" id="precio" id="number" method="post" value=<?php echo $producto['precio'] ?>>
                                        </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</center>

<?php require "views/shared/footer.php"; ?>|