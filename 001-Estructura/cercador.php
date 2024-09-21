<!DOCTYPE html>
<?php // cercador.php
?> 
<html>
    <head>
        <?php
            include __DIR__.'/../012-Plantillas/head.php';
        ?> 
        <meta name="description" content="La pàgina per cercar lo desitjat." />
        <link rel="stylesheet" type="text/css" href="/001-Estructura/gridMenuIBarraICos.css">
        <?php
            include __DIR__.'/../012-Plantillas/001-Menus/menuDadesHead.php';
            include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/cosCercadorHead.php';
            include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/barraCercadorHead.php';
        ?>
    </head>
    <body>
        <nav id='menuComplet' class="menu" style="grid-area: menu">
            <?php //Menu
                include __DIR__.'/../012-Plantillas/001-Menus/menuDades.php';
            ?>
        </nav>
        <section id='cosCercador' class='cos' style="grid-area: cos">
            <?php //cos de la pagina
                include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/cosCercador.php';
            ?>
        </section>
        <aside id="barraCercador" class='barra' style="grid-area: barra">
            <?php //barra de la pagina
                include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/barraCercador.php';
            ?>
        </aside>
    </body>
</html>