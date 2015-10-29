<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Servicios</title>
    <meta name="author" content="Nallely Flores">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src=<?= base_url("media/foundation/js/foundation.min.js")?>></script>
    <script src=<?= base_url("media/foundation/js/vendor/modernizr.js")?>></script>
    <script src=<?= base_url("media/bxslider/jquery.bxslider.min.js")?>></script>
    <script> base = "<?= base_url(); ?>"</script>
    <script src=<?= base_url("media/js/index.js")?>></script>

    <link rel="stylesheet" href=<?= base_url("media/foundation/css/normalize.css")?>>
    <link rel="stylesheet" href=<?= base_url("media/foundation/css/foundation.css")?>>
    <link rel="stylesheet" href=<?= base_url("media/css/index.css")?>>
</head>

<body>
    <div id="cabecera" class="cabecera large-11 columns large-centered"></div>

    <div id="nav" class="nav large-11 columns large-centered"></div>

    <div id="contenido" class="large-11 columns large-centered">

      <div id="nav-vertical" class="sideBar large-2 columns"></div>
      
      <div id="home" class="large-10 columns">
        <div class="tituloNegro large-12 columns large-centered">
          Servicios
        </div>
        <div id="galeriaServicios" class="large-9 columns large-centered">
          <ul id="ulServicios" class="large-12 columns large-centered small-block-grid-2 medium-block-grid-3 large-block-grid-4">
            <li><a href="<?= base_url()?>index.php/servicios/servicios1"><label class="slabel">INSERTOS CONTROLES Y CALIBRADORES POINTE</label><img src="<?= base_url()?>media/css/img/servicios/01.png"></a></li>
            <li><a href="<?= base_url()?>index.php/servicios/servicios2"><label class="slabel">INSERTOS QUÍMICA CLÍNICA POINTE</label><img src="<?= base_url()?>media/css/img/servicios/02.png"></a></li>
            <li><a href="<?= base_url()?>index.php/servicios/servicios3"><label class="slabel">APLICACIONES POINTE</label><img src="<?= base_url()?>media/css/img/servicios/03.png"></a></li>
            <li><a href="<?= base_url()?>index.php/servicios/servicios6"><label class="slabel">INSERTOS CONTROLES Y CALIBRADORES HEMATOLOGÍA CDS </label><img src="<?= base_url()?>media/css/img/servicios/04.png"></a></li>
            <li><a href="<?= base_url()?>index.php/servicios/servicios5"><label class="slabel">INSERTOS DE PRUEBAS RÁPIDAS</label><img src="<?= base_url()?>media/css/img/servicios/05.png"></a></li>
            <li><a href="<?= base_url()?>index.php/servicios/servicios4"><label class="slabel">INSERTOS DE ELISA'S</label><img src="<?= base_url()?>media/css/img/servicios/05.png"></a></li>
          </ul>  
        </div>

        <div id="atencionImg" class="atencionClientes large-12 columns"></div>
        <div id="footer" class="footer large-12 columns"></div>
      </div> <!--home-->
    </div> <!--contenido-->

</body>
</html>