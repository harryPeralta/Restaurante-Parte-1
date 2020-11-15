<?php require "views/shared/header.php"; ?>

<center>
<div class="container">

    <img src="assets/img/menu.png" alt=""> <br><br>
    <img src="assets/img/chefsito.png"> <br><br>
    

        <?php foreach($data['productos'] as $producto)   { ?>
            
            <table class="table " id="fuente">
            
                <thead class="bg-danger">
                    <tr>
                        <td> <?= $producto['nombre'] ?> </td>
                        <td></td>
                        <td> $<?= $producto['precio'] ?> </td>
                    </tr>
                </thead>
            
                <tbody class="letraBlanca">
                    <td> <img src="<?= $producto['foto'] ?> "width="250" height="160""> </td>
                    <td> <?= $producto['descripcion'] ?> </td>
                    <td>  <a href="<?= $producto['identificador'] ?>" class="btn btn-success">Agregar  <br> al carro</a> </td>

                </tbody>
            
            </table>
        </form>
        <?php } ?>
</div>
        
</center>

<?php require "views/shared/footer.php"; ?>|