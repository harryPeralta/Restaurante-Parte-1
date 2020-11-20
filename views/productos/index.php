<?php require "views/shared/header.php"; ?>

<center>
<div class="container">

    <img src="assets/img/menu.png" alt=""> <br><br>
    <img src="assets/img/chefsito.png"> <br><br>
    
        

        <?php foreach($data['productos'] as $producto)   { ?>
            
            <form action="index.php?control=carro&action=store" method="post">
            
            <table class="table " id="fuente">
                

                <thead class="bg-danger">
                    <tr>
                        <td> <?= $producto['nombre'] ?> </td>
                        <td></td>
                        <td> $<?= $producto['precio'] ?> </td>
                    </tr>
                </thead>
            
                <tbody class="letraBlanca">
                    <td> <img src="<?= $producto['foto'] ?> " class="rounded" width="250" height="160"> </td>
                    <td> <?= $producto['descripcion'] ?> </td>
                    <td> <button <?= $producto['identificador'] ?> class="btn btn-success"> Agregar  <br> al carro</button> </td>
                
                <input type="hidden" name="identificador" id="identificador" method="post" value=<?php echo $producto['identificador']; ?>>
                <input type="hidden" name="precio" id="precio" method="post" value=<?php echo $producto['precio']; ?>>
                </tbody>
            
            </table>
        </form>
        <?php } ?>



</div>
        
</center>

<?php require "views/shared/footer.php"; ?>|