<!DOCTYPE html>
<?php // visualitzar.php
?> 
<html>
    <head>
        <?php
            include __DIR__.'/../012-Plantillas/head.php';
        ?> 
        <meta name="description" content="La pàgina per veure la informacio." />
        <link rel="stylesheet" type="text/css" href="/001-Estructura/gridMenuIBarraICos.css">
        <?php
            include __DIR__.'/../012-Plantillas/001-Menus/menuDadesHead.php';
            include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/cosVisualitzarHead.php';
            include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/indexVisualitzarHead.php';
        ?>
    </head>
    <body>
        <nav id='menuComplet' class="menu" style="grid-area: menu">
            <?php //Menu
                include __DIR__.'/../012-Plantillas/001-Menus/menuDades.php';
            ?>
        </nav>
        <section id='cosVisualitzar' class='cos' style="grid-area: cos;">
            <?php //cos de la pagina
                include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/cosVisualitzar.php';
            ?>
        </section>
        <aside id="indexVisualitzar" class='barra' style="grid-area: barra">
            <?php //barra de la pagina
                include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/indexVisualitzar.php';
            ?>
        </aside>
    </body>
</html>