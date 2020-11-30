<?php require "views/shared/header.php"; ?>

<div class="container">

<center><img src="assets/img/carro.png" alt=""> </center>
    <form action="index.php?control=carro&action=store" method="post">
    <table class="table table-secondary table-hover  mt-3 ">
        <thead class="bg-danger letraBlanca">
            <tr id="fuente" style="text-align:center;">
                
                <th width="20%"> <h5 style="text-align:center"> <b> <i>  Nombre </i></b></h5></th>
                <th width="15%"> <h5 style="text-align:center"> <b> <i> Imagen </i></b> </h5></th>
                <th width="30%"> <h5 style="text-align:center"> <b> <i> Descripcion  </i></b></h5></th>
                <th width="15%"> <h5 style="text-align:right"> <b> <i>Precio $ </i></b></h5></th>
               
                <th width="7%" style="text-align:center"> <b> <i> - - - </i></b>  </th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                $total = 0;
                
            foreach($data['carros'] as $carro)   { ?>
                <tr>
                    
                    <td>
                    <br> <br>
                        <?= $carro['nombre'] ?>
                    </td>
                    <td> 
                        
                            <img src="<?= $carro['foto'] ?> " class="rounded" width="100" height="100">
                            
                    
                    </td>
                    <td>
                    <br> <br>
                        <?= $carro['descripcion'] ?>
                        
                    </td>
                    
                    <td style="text-align:right" >
                        <br> <br>   
                    $<?php echo number_format( $carro['precio'])
                    ?></td>
                    <?php  $total += $carro['precio']  ?>
                    <td>
                    <br> 
                        <a href="index.php?control=carro&action=delete&id=<?= $carro['id'] ?>"
                        class="btn btn-outline-danger"> Eliminar </a>
    </form>
                <form action="index.php?control=pedido&action=store" method="post">
                        <input type="hidden" name="id" id="id" method="post" value=<?php echo $carro['id']; ?>>
                        
                    </td>
                </tr>
                 
                
            <?php } ?>
            <tr>
                 <td colspan="3" ><h2 style="text-align:right;">TOTAL $</h2>   </td>
                 
                <td style="text-align:right;"> <input readonly class="form-control" type="hidden" name="precioTotal" id="precioTotal" method="post" > <h2 style="text-align:right;"> <?php echo number_format( $total) ?> </h2> </td>
                 <td></td>
                 <input type="hidden" name="precioTotal" id="precioTotal" method="post" value=<?php echo $total; ?>>

                </tr>
            </table>
            <div class="pull-left">
                <a class="btn  btn-warning" href="index.php?control=producto&action=index" role="button">Seguir Comprando</a>
             </div>
            <div class="pull-right">
                <button type="sumbit"class="btn btn-warning ">Finalizar pedido</button>
            </div>
                        
                       
            </form>
</div>


<?php require "views/shared/footer.php"; ?>