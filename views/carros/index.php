<?php require "views/shared/header.php"; ?>

<div class="container">

<h1> <?php echo $data["titulo"]?></h1>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>id</th>
                <th>IdentificadorProducto</th>
                <th>precioTotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['carros'] as $carro)   { ?>
                <tr>
                    <td><?= $carro['id'] ?></td>
                    <td><?= $carro['identificadorProducto'] ?></td>
                    <td><?= $carro['precioTotal'] ?></td>
                    <td>

                        <a href="index.php?control=carro&action=delete&id=<?= $carro['id'] ?>"
                        class="btn btn-danger"> Eliminar </a>

                    </td>
                </tr>
            <?php } ?>

    </table>
</div>


<?php require "views/shared/footer.php"; ?>