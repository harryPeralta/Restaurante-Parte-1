<?php require "views/shared/header.php"; ?>

<div class="container">

<center>
    
        <img src="assets/img/menu.png" alt=""> <br><br>
        <img src="assets/img/chefsito.png"> <br><br>
    
<div class="container">
<div class="row">
<div class="col-md-1"></div>
</div>
<div class="row">
<div class="col-md-1"></div>
        <div class="col-md-8">

                    <?php foreach($data['productos'] as $producto)   { ?>
                    <form action="index.php?control=menu&action=inicio">
                    <table class="table table-striped">
                        <thead class="table-light">
                            <tr>
                                <th colspan="4"scope="col-md"><?= $producto['nombre'] ?></th>
                                <th scope="col">$<?= $producto['precio'] ?></th>
                            </tr>
                        </thead>
                        <tbody class="table-danger">
                            <tr>
                            <th></th>
                            <th scope="row"><img src="<?= $producto['foto'] ?>"width="250" height="160"></th>
                            <th></th>
                            <td scope="row"><?= $producto['descripcion']?></td>
                            <td scope="row"><a href="index.php?control=producto&action=insert" class="btn btn-danger">Agregar al carro</a></td>
                            </tr>
                        </tbody>
                        </table>
                    </form>
                    <?php } ?>
        </div>
        <div class="col-md-2"></div>
</center>

<?php require "views/shared/footer.php"; ?>