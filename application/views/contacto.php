<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contacto</title>
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
          $(".sideBar").css('height','750px')
      });
    </script>
</head>

<body>
    <div id="cabecera" class="cabecera large-11 columns large-centered"></div>

    <div id="nav" class="nav large-11 columns large-centered"></div>

    <div id="contenido" class="large-11 columns large-centered">

      <div id="nav-vertical" class="sideBar large-2 columns"></div>
      
      <div id="home" class="large-10 columns">

        <div class="large-10 columns large-centered"><img src=<?= base_url("media/css/img/contactenos.jpg")?>></div>
        <div id="inst" class="large-10 columns large-centered">
          <p>Para brindarle un mejor sevicio, favor de llenar el siguiente formulario.<br><br>
             Surtimos pedido a toda la República Mexicana.
          </p>
        </div>
        <div class="large-12 columns large-centered">
          <form id="contactoForm" method="post" action="contacto" class="large-12 columns large-centered">
            <div class="large-12 columns large-centered">
              <div class="row">
                <div class="large-3 columns"><label class="labelForm">Nombre del interesado</label></div>
                <div class="large-9 columns"><input id="nombre" type="text" name="nombre" required></div>
              </div>
              <div class="row">
                <div class="large-3 columns"><label class="labelForm">Nombre del laboratorio/empresa</label></div>
                <div class="large-9 columns"><input id="empresa" type="text" name="empresa"></div>
              </div>
              <div class="row">
                <div class="large-3 columns"><label class="labelForm">Correo</label></div>
                <div class="large-9 columns"><input id="correo" type="email" name="correo" required></div>
              </div>
              <div class="row">
                <div class="large-3 columns"><label class="labelForm">Teléfono (incluir LADA)</label></div>
                <div class="large-9 columns"><input id="telefono" type="text" name="telefono"></div>
              </div>
              <div class="row">
                <div class="large-3 columns"><label class="labelForm">Dirección</label></div>
                <div class="large-9 columns"><textarea id="direccion" name="direccion" required></textarea></div>
              </div>
              <div class="row">
                <div class="large-3 columns"><label class="labelForm">Ciudad</label></div>
                <div class="large-9 columns"><textarea id="ciudad" name="ciudad" required></textarea></div>
              </div>            
              <div class="row">
                <div class="large-3 columns"><label class="labelForm">Solicitud</label></div>
                <div class="large-9 columns"><textarea id="solicitud" name="solicitud" required></textarea></div>
              </div> 
              <div class="row">
              <div id="botones" class="large-4 columns large-offset-8">
                <input id="limpiarBtn" class="large-5 columns" type="button" value="limpiar" onclick="limpiaCamposForm()" />
                <input type="submit" class="large-5 columns" value="enviar"/>
              </div>

              </div>
            </div>                      
          </form>

        </div>
        </div>
    </div> <!--contenido-->

</body>
</html>