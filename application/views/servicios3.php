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

<?php


//lista de productos en la tabla
$productos = array(
      'AbbotAeroset.pdf',
      'AbbotAlycon.pdf',
      'AbbotSpectrum.pdf',
      'AbbotVP.pdf',
      'AGII.pdf',
      'ASCA.pdf',
      'ATAC6000.pdf',
      'ATAC8000.pdf',
      'AU400-640.pdf',
      'AU600.pdf',
      'BayerOpera.pdf',
      'Beckman700.pdf',
      'BeckmanSynchronCX.pdf',
      'Chemwell.pdf',
      'CobasBio.pdf',
      'CobasFara.pdf',
      'CobasMira.pdf',
      'CobasMiraPlus.pdf',
      'Dimension.pdf',
      'Express550.pdf',

);
$productos2 = array(
      'Gemstar.pdf',
      'Hitachi704.pdf',
      'Hitachi705.pdf',
      'Hitachi717.pdf',
      'Hitachi736.pdf',
      'Hitachi737.pdf',
      'Hitachi747.pdf',
      'Hitachi902.pdf',
      'Hitachi917.pdf',
      'Hitachi911.pdf',
      'Hitachi912.pdf',
      'Hycel200.pdf',
      'MascottPlus.pdf',
      'MindrayBSSeries.pdf',
      'Monarch.pdf',
      'Pointe180StatFax.pdf',
      'RA100-Assist.pdf',
      'RA500-1000.pdf',
      'Selectra',
      'WAKO20R-30R', 
);

//ubicacion del directorio de los pdf
$pathPDF = base_url()."media/pdf/servicios/3/pdf/";
?>
<body>
    <div id="cabecera" class="cabecera large-11 columns large-centered"></div>

    <div id="nav" class="nav large-11 columns large-centered"></div>

    <div id="contenido" class="large-11 columns large-centered">

      <div id="nav-vertical" class="sideBar large-2 columns"></div>
      
      <div id="home" class="large-10 columns">
              <div class="tituloNegro large-12 columns large-centered"></div>
                  <div class="tabla large-12 columns large-centered">
                      <table border="2" align="center" cellpadding="1">
                          <tr>
                            <td colspan="2">Equipo</td> 
                          </tr>                                    
                            <?php foreach($productos as $key => $producto){?>
                              <tr>
                                  <td><a href="<?= $pathPDF.$producto ?>"><?= $producto ?></a></td>                          
                                  <td><a href="<?= $pathPDF.$productos2[$key] ?>"><?= $productos2[$key] ?></a></td>                         
                              </tr>
                            <?php } ?>
                        </table>
                  </div>
      </div> <!--home-->
      <div id="atencionImg" class="atencionClientes large-12 columns"></div>
      <div id="footer" class="footer large-12 columns"></div>
    </div>
</body>
</html>