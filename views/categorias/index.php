<h1>Gestionar categorias</h1>
<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'completed'): ?>
<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>
<a href="<?=base_url ?>categoria/crear" class="button button-small">Crear categorias</a>
<table>
    <th>ID</th>
    <th>Nombre</th>
<?php while($cat = $categorias->fetch_object()): ?>
    
    <tr>
        <td><?=$cat->id; ?></td>
        <td><?=$cat->nombre; ?></td>
    </tr>
<?php endwhile; ?>
</table>

