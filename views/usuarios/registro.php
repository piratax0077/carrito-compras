<h1>Registrarse</h1>
<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'completed'): ?>
<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
<strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>
<form action="<?=base_url ?>usuario/save" method='POST'>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"  />
    
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos"  />
    
    <label for="email">Email</label>
    <input type="text" name="email"  />
    
    <label for="password">Password</label>
    <input type="password" name="password"  />
    
    <input type="submit" value="enviar" />
</form>