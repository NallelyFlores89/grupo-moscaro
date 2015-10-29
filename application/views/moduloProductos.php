<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Nallely Flores">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src=<?= base_url("media/bxslider/jquery.bxslider.min.js")?>></script>
    <script src=<?= base_url("media/foundation/js/foundation.min.js")?>></script>
    <script src=<?= base_url("media/foundation/js/vendor/modernizr.js")?>></script>

    <script> base = "<?= base_url(); ?>"</script>
    <script src=<?= base_url("media/js/index.js")?>></script>

    <link rel="stylesheet" href=<?= base_url("media/foundation/css/normalize.css")?>>
    <link rel="stylesheet" href=<?= base_url("media/foundation/css/foundation.css")?>>
    <link rel="stylesheet" href=<?= base_url("media/css/index.css")?>>

    <script>
      $(document).ready(function(){
          $(".sideBar").css('height','700px')
      });
    </script>
</head>

<body>
    <title><?= $datos['nombre']?></title>
    <div id="cabecera" class="cabecera large-11 columns large-centered"></div>

    <div id="nav" class="nav large-11 columns large-centered"></div>

    <div id="contenido" class="large-11 columns large-centered">

      <div id="nav-vertical" class="sideBar large-2 columns"></div>
      
      <div id="home" class="large-10 columns">
        <div class="large-9 columns large-centered">
          <span class="titulo"><?= $datos['nombre']?></span>
        </div><br><br>
        <?php 
          if($datos['imagen']==""){ ?>
            <div class="large-5 columns large-centered"><img src="<?= base_url()?>media/css/img/imagen-no-disponible.jpg"></div>
        <?php }else{ ?>
        <?php ?>
          <div class="large-5 columns large-centered"><img src="<?= base_url().'media/css/img/'.$datos['imagen']?>"></div>
        <?php } ?>
        <div class="descripcion large-8 columns large-centered">
          <p><b>Descripción: </b><?= $datos['descripcion'] ?></p>
        </div>
        <div id="atencionImg" class="atencionClientes large-12 columns"></div>
        <div id="footer" class="footer large-12 columns"></div>
      </div> <!--home-->
    </contenido>
    </div> <!--contenido-->

</body>
</html>