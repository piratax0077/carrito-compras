<h1>Gestión de productos</h1>
<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'completed'): ?>
<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'completed'): ?>
<strong class="alert_green">Producto eliminado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'): ?>
<strong class="alert_red">Error, selecciona bien el producto</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>
<a href="<?=base_url ?>producto/crear" class="button button-small">Crear productos</a>
<table>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Acciones</th>
<?php while($pro = $productos->fetch_object()): ?>
    
    <tr>
        <td><?=$pro->id; ?></td>
        <td><?=$pro->nombre; ?></td>
        <td><?=$pro->precio; ?></td>
        <td><?=$pro->stock; ?></td>
        <td>
            <a href="<?=base_url ?>producto/editar&id=<?=$pro->id ?>" class="button button-gestion">Editar</a>
            <a href="<?=base_url ?>producto/eliminar&id=<?=$pro->id ?>" class="button button-gestion button-red">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>