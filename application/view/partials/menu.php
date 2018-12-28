<?php  ?>

<div class="content">
    <div class="navbarempty">
        <a href="" class="btns" id="btnprivate">Zona privada</a>
    </div>
    <div class="navbarheader float-right">
        <a href="<?php echo URL; ?>">Inicio</a>
        <?php if(!isset($_SESSION['userConSesionIniciada']['rol'])) : ?>
            <a href="<?php echo URL; ?>login">Iniciar sesión</a>
        <?php endif ?>
        <a href="<?php echo URL; ?>home/ejemplo1">Primera sección</a>
        <a href="<?php echo URL; ?>home/ejemplo2">Otra sección</a>
        <a href="">Contacto</a>
    </div>

</div>

