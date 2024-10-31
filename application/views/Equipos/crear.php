<h1  style="color:MediumSeaGreen;">Agregar Equipos</h1>
<form action="<?php echo site_url('Equipos/crear'); ?>" method="post">
    <div>

    <label   style="color:DodgerBlue;" for="id">ID:</label><br>
    <input type="text" name="id" required>

    </div><br>

    <div>  

    <label style="color:DodgerBlue;" for="nombre">Nombre:  </label><br>
    <input type="text" name="nombre" required>

    </div><br>

    <div>

    <label   style="color:DodgerBlue;"  for="marca">Marca:</label><br>
    <input type="text" name="marca" required>

    </div><br>

    <div>

    <label  style="color:DodgerBlue;"  for="color">Color:</label><br>
    <input type="text" name="color" required>


    </div><br>

  <div>

  <label    style="color:DodgerBlue;" for="serie">Serie:</label><br>
  <input type="text" name="serie" required>

  </div><br>

   <div>

   <label    style="color:DodgerBlue;"   for="usuario">Usuario</label><br>
   <input type="text" name="usuario" required>


   </div><br>

  <div>

  <label    style="color:DodgerBlue;"  for="fecha_compra">Fecha Compra:</label><br>
  <input type="text" name="fecha_compra" required>


  </div><br>
    

<div>

<label       style="color:DodgerBlue;"  for="precio_compra">Precio Compra:</label><br>
<input type="text" name="precio_compra" required> 


</div><br>



<div>

<label    style="color:DodgerBlue;"     for="proveedor_nit">Proveedor Nit:</label><br>
<input type="text" name="proveedor_nit" required> 


</div><br>





<div>

<label    style="color:DodgerBlue;"  for="estado">Estado:</label><br>
<input type="text" name="estado" required> 


</div><br>




    <input type="submit" value="Crear Equipos">
</form>