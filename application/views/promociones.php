<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Promociones</title>
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
          $(".sideBar").css('height','700px')
      });
    </script>
</head>

<body>
    <div id="cabecera" class="cabecera large-11 columns large-centered"></div>
    <div id="nav" class="nav large-11 columns large-centered"></div>
    <div id="contenido" class="large-11 columns large-centered">
      <div id="nav-vertical" class="sideBar large-2 columns"></div>      
      <div id="home" class="large-10 columns">
        <!--  <div id="" class="large-12 columns">
            <div><center><img src=<?= base_url("media/css/img/promociones/junio.jpg")?>></center></div>
            <div><center><img src=<?= base_url("media/css/img/promociones/02.jpg")?>></center></div>
            <div><center><img src=<?= base_url("media/css/img/promociones/03.jpg")?>></center></div>
          </div> -->
          <div id="conoce"><img src=<?= base_url("media/css/img/promociones/portadas/conoce.jpg")?>></div>

          <div id="variasPromociones" class="large-12 columns">
            <ul id="galeriaProm" class="large-8 columns large-centered small-block-grid-3 medium-block-grid-3 large-block-grid-3">
              <li id="prom1"><img src=<?= base_url("media/css/img/promociones/portadas/banditas.png")?>></li>
              <li id="prom2"><img src=<?= base_url("media/css/img/promociones/portadas/consumibles.png")?>></li>
              <li id="prom3"><img src=<?= base_url("media/css/img/promociones/portadas/quimica-clinica.png")?>></li>
            </ul>
          </div>

          <div id="promocion">
            
          </div>
      </div> <!--home-->
    </div> <!--contenido-->
</body>
</html>