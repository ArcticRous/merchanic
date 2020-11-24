<aside id="lateral">

<div id=login class="block_aside">
    <h3>Bienvenido</h3>
    <form class="form-login" action="" method="POST">
        <label class="la-lo" for="gmail">Departamento</label>
        <input type="text" name="email">
        <label class="la-lo" for="password">Contraseña</label>
        <input type="password" name="password">
        <input type="submit" value="Inicio">
    </form>
    <img class="" src="" alt="">
    <img class="" alt="">
    <h3>nombre</h3>


    <?php endif;?>

    <ul id="op-usu">
        <?php if(isset($_SESSION['admin'])): ?>
        <!---acceso a los administradores --->
        <li><a class="opciones-per" href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
        <li><a class="opciones-per" href="<?=base_url?>producto/gestion">Gestionar Productos</a></li>
        <li><a class="opciones-per" href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
        <li><a class="opciones-per" href="<?=base_url?>usuario/registro">Registar empleados</a></li>
        <?php endif;?>
        <?php if(!isset($_SESSION['admin'])): ?>
        <?php $stats= utils::staCar(); ?>
        <h3>MI CARRITO</h3>
        <li><a class="opciones-per" href="<?=base_url?>carrito/index">ver mi carrito</a></li>
        <li><a class="opciones-per"
                href="<?=base_url?>carrito/index">productos(<?=$stats['count']?>)</a></li>
        <li><a class="opciones-per" href="<?=base_url?>carrito/index">Total $(<?=$stats['total']?>)</a>
        </li>
        <?php endif;?>

        <?php if(isset($_SESSION['identity'])): ?>
        <li><a class="opciones-per" href="<?=base_url?>usuario/logout">Cerrar sesion</a></li>
        <?php endif;?>

    </ul>

</div>
</aside>

<!----- contenido general ------>
<div id="central">