<div id='barraCerca' style="grid-area: barraCercar">
    <?php
        include __DIR__.'/../../013-Moduls/002-CosDeLaPagina/barraCerca.php';
    ?>
</div>
<div id='mostrarResultatCerca' style="grid-area: resultatCrecar">
    <iframe id='iframeMostrarResultatCerca' frameborder="0"></iframe>
</div>
<script>
        combineFiles3('iframeMostrarResultatCerca', '/013-Moduls/headIframe.php', '/013-Moduls/002-CosDeLaPagina/mostrarResultatCerca.php');
</script>
