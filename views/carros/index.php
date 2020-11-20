<?php require "views/shared/header.php"; ?>

<div class="container">

<!-- <h1> <?php echo $data["titulo"]?></h1> -->
    <form action="index.php?control=carro&action=store" method="post">
    <table class="table mt-3 letraBlanca">
        <thead>
            <tr>
                <th>id</th>
                <th>Numero Carro</th>
                <th>Identificador Producto</th>
                <th>Precio Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['carros'] as $carro)   { ?>
                <tr>
                    <td><?= $carro['id'] ?></td>
                    <td><?= $carro['numeroCarro'] ?></td>
                    <td><?= $carro['identificadorProducto'] ?></td>
                    <td><?= $carro['precioTotal'] ?></td>
                    <td>

                        <a href="index.php?control=carro&action=delete&id=<?= $carro['id'] ?>"
                        class="btn btn-danger"> Eliminar </a>
    </form>
    <form action="index.php?control=pedido&action=store" method="post">
                        <input type="number" name="id" id="id" method="post" value=<?php echo $carro['id']; ?>>
                        <input type="number" name="precioTotal" id="precioTotal" method="post" value=<?php echo $carro['precioTotal']; ?>>
                    </td>
                </tr>
            <?php } ?>
    </table>
        <button  class="btn btn-warning">Finalizar pedido</button>
    </form>
</div>


<?php require "views/shared/footer.php"; ?>