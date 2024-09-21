<!DOCTYPE html>
<?php // index.php
?> 
<html>
    <head>
        <?php
            include __DIR__.'/../012-Plantillas/head.php';
        ?> 
        <meta name="description" content="La pàgina per iniciar." />
        <link rel="stylesheet" type="text/css" href="/001-Estructura/gridMenuICos.css">
        <?php
            include __DIR__.'/../012-Plantillas/001-Menus/menuIndexHead.php';
            //include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/cosIndexHead.php';
        ?>
    </head>
    <body>
        <nav id='menuComplet' class="menu" style="grid-area: menu">
            <?php //Menu
                include __DIR__.'/../012-Plantillas/001-Menus/menuIndex.php';
            ?>
        </nav>
        <section id='cosIndex' class='cos' style="grid-area: cos">
            <?php //Cos de la pagina
                include __DIR__.'/../012-Plantillas/002-CosDeLaPagina/cosIndex.php';
            ?>
        </section>
    </body>
</html>