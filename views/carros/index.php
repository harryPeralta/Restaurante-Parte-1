<?php require "views/shared/header.php"; ?>

<div class="container">

<center><img src="assets/img/carro.png" alt=""> </center>
    <form action="index.php?control=carro&action=store" method="post">
    <table class="table table-secondary table-hover  mt-3 ">
        <thead class="bg-danger">
            <tr id="fuente" class="letrablanca" style="text-align:center;">
                
                <th> <h5> Nombre</h5></th>
                <th> <h5>Imagen </h5></th>
                <th> <h5>Descripcion </h5></th>
                <th> <h5>Precio </h5></th>
               
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                $total = 0;
                
            foreach($data['carros'] as $carro)   { ?>
                <tr>
                    
                    <td><?= $carro['nombre'] ?></td>
                    <td> <img src="<?= $carro['foto'] ?> " class="rounded" width="100" height="100"></td>
                    <td><?= $carro['descripcion'] ?></td>
                    <td><?= $carro['precio'] ?></td>
                    <?php  $total += $carro['precio']  ?>
                    <td>

                        <a href="index.php?control=carro&action=delete&id=<?= $carro['id'] ?>"
                        class="btn btn-danger"> Eliminar </a>
    </form>
                <form action="index.php?control=pedido&action=store" method="post">
                        <input type="hidden" name="id" id="id" method="post" value=<?php echo $carro['id']; ?>>
                        
                    </td>
                </tr>
                 
                
            <?php } ?>
            <tr>
                 <td colspan="3" align="right"><h3 style="text-align:right;">TOTAL</h3>   </td>
                 
                 <td align="right"><input readonly class="form-control" type="number" name="precioTotal" id="precioTotal" method="post" value=<?php echo $total ?>></td>
                 <td></td>
                 
                </tr>
            </table>
            <div class="pull-left">
                <a class="btn btn-danger" href="index.php?control=producto&action=index" role="button">Seguir Comprando</a>
             </div>
            <div class="pull-right">
                <button type="sumbit"class="btn btn-danger ">Finalizar pedido</button>
            </div>
                        
                       
            </form>
</div>


<?php require "views/shared/footer.php"; ?>