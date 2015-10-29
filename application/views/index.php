<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
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
    <link rel="stylesheet" href=<?= base_url("media/bxslider/jquery.bxslider.css")?>>
    <link rel="stylesheet" href=<?= base_url("media/css/index.css")?>>

    <script>
      $(document).ready(function(){
          $(".sideBar").css('height','790px');
      });
    </script>
</head>

<body>
    <div id="cabecera" class="cabecera large-11 columns large-centered"></div>
    <div id="nav" class="nav large-11 columns large-centered"></div>

    <div id="contenido" class="large-11 columns large-centered">

      <div id="nav-vertical" class="sideBar large-2 columns"></div>
      
      <div id="home" class="large-10 columns">
          <div class="large-12 columns">
            <ul class="bxslider">
              <li><a href="<?= base_url()?>index.php/cinicio/hemosure"><img src=<?= base_url("media/css/img/pagina/index/banners/000.png") ?> /></a></li>
              <li><img src=<?= base_url("media/css/img/pagina/index/banners/001.png") ?> /></li>
              <li><img src=<?= base_url("media/css/img/pagina/index/banners/002.png") ?> /></li>
              <li><img src=<?= base_url("media/css/img/pagina/index/banners/003.png") ?> /></li>
              <li><img src=<?= base_url("media/css/img/pagina/index/banners/004.png") ?> /></li>
              <li><img src=<?= base_url("media/css/img/pagina/index/banners/005.png") ?> /></li>
            </ul>      
          </div>

          <div class="large-12 columns">

            <div id="galardonImg" class="large-9 columns"></div> 

            <div class="large-3 columns">
              <a href=<?= base_url("index.php/cinicio/promociones")?>>
                <img id="bannerPromImg" src=<?= base_url("media/css/img/pagina/index/banner_promocion.png") ?>>
              </a>
            </div>

          </div>


          
          <div id="atencionImg" class="atencionClientes large-12 columns"></div>

          <div id="footer" class="footer large-12 columns"></div>
      </div> <!--home-->
    </div> <!--contenido-->

</body>
</html>