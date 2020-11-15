<?php require "views/shared/header.php"; ?>

<div class="container">
<h1> <?php echo $data["titulo"]?></h1>

        <form action="index.php?control=cliente&action=store" method="post">
            <div class="form-group">
                <input type="hidden" name="id" id="id" > 
            </div>
            
            <div class="form-group">
                <label for="identificadorProducto">Ciudad:</label>
                <select type="number" name="identificadorProducto" id="identificadorProducto" class="form-control">

                <?php
                    foreach($data["productos"] as $producto)
                    {
                        $identificador = $producto["identificador"];
                        $nombre = $producto["nombre"];
                        echo "<option value=$identificador>$nombre</option>";
                    }
                
                ?>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button> <br><br><br>
    </form>
</div>


<?php require "views/shared/footer.php"; ?>