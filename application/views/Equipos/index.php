<h1   style="color:DodgerBlue;">Lista de Equipos</h1>
<a href="<?php echo site_url('Equipos/crear'); ?>">Registrar Equipos</a>
<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>marca</th>
        <th>color</th>
        <th>serie</th>
        <th>usuario</th>
        <th>fecha de Compra</th>
        <th>Precio Compra</th>
        <th>proveedor nit</th>
        <th>estado</th>
    </tr>
    <?php foreach ($equipos as $equipos): ?>
    <tr>
        <td><?php echo $equipos->id; ?></td>
        <td><?php echo $equipos->nombre; ?></td>
        <td><?php echo $equipos->marca; ?></td>
        <td><?php echo $equipos->color; ?></td>
        <td><?php echo $equipos->serie; ?></td>
        <td><?php echo $equipos->usuario; ?></td>
        <td><?php echo $equipos->fecha_compra ?></td>
        <td><?php echo $equipos->precio_compra; ?></td>
        <td><?php echo $equipos->proveedor_nit ?></td>
        <td><?php echo $equipos->estado; ?></td>
        <td>
            <a href="<?php echo site_url('Equipos/editar/' . $equipos->id); ?>">Editar</a>
            <a href="<?php echo site_url('Equipos/eliminar/' . $equipos->id); ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>