<h1 style="background-color:rgb(255, 99, 71);">Equipos</h1>

<form action="<?php echo site_url('Equipos/editar/' . $equipos->id); ?>" method="post">
    <div>


    <label for="nit">id:</label><br>
    <input type="text" name="id" value="<?php echo $equipos->id; ?>" required>

    </div><br>


    <div alin>

    <label for="nombre">nombre:</label><br>
    <input type="text" name="nombre" value="<?php echo $equipos->nombre; ?>" required>

    </div><br>




  
  <div>

    <label for="marca">marca:</label><br>
    <input type="text" name="marca" value="<?php echo $equipos->marca; ?>" required>


  </div><br>
    
<div>
    
<label for="color">color:</label><br>
<input type="text" name="color" value="<?php echo $equipos->color; ?>" required>

</div><br>




    <div>


    <label for="serie">serie:</label><br>
    <input type="text" name="serie" value="<?php echo $equipos->serie; ?>" required>


    </div><br>


    <div>

    <label for="usuario">usuario:</label><br>
    <input type="text" name="usuario" value="<?php echo $equipos->usuario; ?>" required>


    </div><br>



    <div>

    <label for="fecha_compra">fecha_compra:</label><br>
    <input type="text" name="fecha_compra" value="<?php echo $equipos->fecha_compra; ?>" required><br>


    </div><br>    
    

<div>



    <label for="precio_compra">precio_compra:</label><br>
    <input type="text" name="prcio_compra" value="<?php echo $equipos->precio_compra; ?>" required><br>

</div><br>

<div>

    <label  for="proveedor_nit">proveedor_nit:</label><br>
    <input type="text" name="proveedor_nit" value="<?php echo $equipos->proveedor_nit; ?>" required><br>

</div><br>




    <div>

    <label for="estado">estado:</label><br>
    <input type="text" name="estado" value="<?php echo $equipos->estado; ?>" required><br>



    </div><br>
    
    <input type="submit" value="Actualizar Equipos"><br><br>
</form>
