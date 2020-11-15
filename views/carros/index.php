<?php require "views/shared/header.php"; ?>

<div class="container">

<h1> <?php echo $data["titulo"]?></h1>
    <a href="index.php?control=cliente&action=insert" class="btn btn-success">Crear nuevo</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>id</th>
                <th>IdentificadorProdcuto</th>
                <th>precioTotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['carroCompras'] as $carroCompras)   { ?>
                <tr>
                    <td><?= $carroCompras['id'] ?></td>
                    <td><?= $carroCompras['identificadorProdcuto'] ?></td>
                    <td><?= $carroCompras['precioTotal'] ?></td>
                    <td>

                        <a href="index.php?control=carrocompras&action=delete&id=<?= $carroCompras['id'] ?>"
                        class="btn btn-danger"> Eliminar </a>

                    </td>
                </tr>
            <?php } ?>

    </table>
</div>


<?php require "views/shared/footer.php"; ?>