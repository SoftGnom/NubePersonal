<!DOCTYPE html>
<?php // dades.php
?> 
<html>
    <head>
        <?php
            include __DIR__.'/../012-Plantillas/head.php';
        ?> 
        <meta name="description" content="La pàgina per escollir la llista (Carpeta)." />
        <link rel="stylesheet" type="text/css" href="/001-Estructura/gridMenuICos.css">
        <?php 
            include __DIR__.'/../012-Plantillas/001-Menus/menuDadesHead.php';
            include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/cosDadesHead.php';
        ?>
    </head>
    <body>
        <nav id='menuComplet' class="menu" style="grid-area: menu">
            <?php //Menu
                include __DIR__.'/../012-Plantillas/001-Menus/menuDades.php';
            ?>
        </nav>
        <section id='cosDades' class='cos' style="grid-area: cos;">
            <?php //cos de la pagina
                include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/cosDades.php';
            ?>
        </section>
    </body>
</html>