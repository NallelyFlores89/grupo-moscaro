<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tubos capilares</title>
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
          Tubos capilares
        </div>
        <ul class="listaCatalogos large-12 columns">
          <?php
            $base2 = "media/css/img/";
            if ( $productos == -1){ ?>
              <h2>No hay productos disponibles en el catalogo</h2>
            <?php }else{
              foreach ($productos as $value) { ?>
                <li class="productosCaja">                  
                  <?php 
                    if($value['imagen'] == ""){ ?>
                    <div class="productosFoto large-4 columns">
                      <img src="<?= base_url().$base2?>imagen-no-disponible.jpg">
                    </div>
                  <?php }else{ ?>
                    <div class="productosFoto large-4 columns">
                      <img src="<?= base_url().$base2.$value['imagen']?>">
                    </div>
                  <?php } ?>
                  <div class="infoProducts large-8 columns">
                    <h2 class="large-12 columns"><?=$value['nombre']?></h2>
                    <div class="large-12 columns"><label class="large-5 columns"><?=$value['unidad']?></label></div>
                    <div class="large-12 columns"><label class="large-5 columns precio">Precio: <?=$value['precio']?></label></div>
                    <div class="large-12 columns"><input class="masInfB large-5 columns" onclick="cargaModulo('<?= $value['idproducto']?>')" type="button"></div>
                  </div>
                </li>
                <!-- <hr> -->
            <?php }}
            ?>
        </ul>
        <div id="atencionImg" class="atencionClientes large-12 columns"></div>
        <div id="footer" class="footer large-12 columns"></div>
      </div> <!--home-->
    </div> <!--contenido-->

</body>
</html>