<?php if (isset($producto)) : ?>
    <div id="detail-product">
        <h1><?= $producto->nombre ?></h1>

            <div class="image">
                <?php if ($producto->imagen) : ?>
                    <img  src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" />
                <?php else: ?>
                    <img src="<?= base_url ?>assets/img/camiseta.png" />
                <?php endif; ?>
            </div>
            <div class="data">
                <h2><?= $producto->nombre ?></h2> 
                <p class="description"><?= $producto->descripcion ?></p>
                <p class="price"><?= $producto->precio ?>$</p>

                <a href="<?=base_url ?>carrito/add&id=<?=$producto->id ?>" class="button" >Comprar</a>
            </div>
       

    </div>
<?php else: ?>
    <h1>El producto no existe</h1>
<?php endif; ?>