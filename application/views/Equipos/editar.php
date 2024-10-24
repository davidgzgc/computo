<h1>Equipos</h1>
<form action="<?php echo site_url('Equipos/editar/' . $equipos->id); ?>" method="post">
    <label for="nit">id:</label>
    <input type="text" name="id" value="<?php echo $equipos->id; ?>" required>


    <label for="nombre">nombre:</label>
    <input type="text" name="nombre" value="<?php echo $equipos->nombre; ?>" required>

    <label for="marca">marca:</label>
    <input type="text" name="marca" value="<?php echo $equipos->marca; ?>" required>

    
    <label for="color">color:</label>
    <input type="text" name="color" value="<?php echo $equipos->color; ?>" required>


    <label for="serie">serie:</label>
    <input type="text" name="serie" value="<?php echo $equipos->serie; ?>" required>

    <label for="usuario">usuario:</label>
    <input type="text" name="usuario" value="<?php echo $equipos->usuario; ?>" required>



        
    <label for="fecha_compra">fecha_compra:</label>
    <input type="text" name="fecha_compra" value="<?php echo $equipos->fecha_compra; ?>" required><br>



    <label for="precio_compra">precio_compra:</label>
    <input type="text" name="prcio_compra" value="<?php echo $equipos->precio_compra; ?>" required><br>




    <label for="proveedor_nit">proveedor_nit:</label>
    <input type="text" name="proveedor_nit" value="<?php echo $equipos->proveedor_nit; ?>" required><br>





    <label for="estado">estado:</label>
    <input type="text" name="estado" value="<?php echo $equipos->estado; ?>" required><br>


    
    <input type="submit" value="Actualizar Equipos"><br>
</form>