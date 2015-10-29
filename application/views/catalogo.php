<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Catálogo</title>
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

    <script>
      $(document).ready(function(){
          $(".sideBar").css('height','1265px')
      });
    </script>
</head>

<body>
    <div id="cabecera" class="cabecera large-11 columns large-centered"></div>

    <div id="nav" class="nav large-11 columns large-centered"></div>

    <div id="contenido" class="large-11 columns large-centered">

      <div id="nav-vertical" class="sideBar large-2 columns"></div>
      
      <div id="home" class="large-10 columns">
        <div class="tituloNegro large-12 columns large-centered">
          Catálogo de productos
          <p id="mensajeCA">En estos momentos, nos encontramos actualizando el contenido de nuestros catálogos. Cualquier duda que tenga,
          por favor contactenos a través del correo: <label class="negrita">direccion@grupomoscaro.com. </label>Estamos a sus órdenes.</p>
        </div>
        <div id="galeriaCatalogo" class="large-9 columns large-centered">
          <ul id="ulCatalogo" class="large-12 columns small-block-grid-2 medium-block-grid-4 large-block-grid-4">
            <?php 
                $base2 = "media/css/img/";
                $i = 1;
                foreach ($catalogos as $value) { 
                  if($i != 1 && $i != 16 && $i != 17){
                ?>
                    <li class="large-centered" onclick="abreCatalogo(<?=$value['idcatalogo']?>)" style="background-image: url('<?=base_url().$base2.$value['imagen']?>')">
                      <a href="<?=$value['ruta']?>"><?=$value['nombre']?></a>
                    </li>
            <?php } $i++;
                } ?>            
          </ul>  
        </div>

        <div id="atencionImg" class="atencionClientes large-12 columns"></div>
        <div id="footer" class="footer large-12 columns"></div>
      </div> <!--home-->
    </div> <!--contenido-->

</body>
</html>