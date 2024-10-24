<h1>Agregar Equipos</h1>
<form action="<?php echo site_url('Equipos/crear'); ?>" method="post">
    <div>

    <label for="id">id:</label>
    <input type="text" name="id" required>

    </div><br>

    <div>  

    <label for="nombre">nombre:</label>
    <input type="text" name="nombre" required>

    </div><br>

    <div>

    <label for="marca">Marca:</label>
    <input type="text" name="marca" required>

    </div><br>

    <div>

    <label for="color">color:</label>
    <input type="text" name="color" required>


    </div><br>

  <div>

  <label for="serie">serie:</label>
  <input type="text" name="serie" required>

  </div><br>

   <div>

   <label for="usuario">usuario</label>
   <input type="text" name="usuario" required>


   </div><br>

  <div>

  <label for="fecha_compra">fecha_compra:</label>
  <input type="text" name="fecha_compra" required>


  </div><br>
    

<div>

<label for="precio_compra">precio_compra:</label>
<input type="text" name="precio_compra" required> 


</div><br>



<div>

<label for="proveedor_nit">proveedor_nit:</label>
<input type="text" name="proveedor_nit" required> 


</div><br>





<div>

<label for="estado">estado:</label>
<input type="text" name="estado" required> 


</div><br>




    <input type="submit" value="Crear Equipos">
</form>