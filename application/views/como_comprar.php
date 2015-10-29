<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>¿Cómo comprar?</title>
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
        <div class="titulo large-12 columns large-centered">
        </div>
        <div id="comoComprarCaja" class="large-12 columns large-centered">
          <ul id="ulComoComprar" class="large-12 columns large-centered small-block-grid-2 medium-block-grid-2 large-block-grid-2">
            <li id="paso1">
              <span><b>Identifique el producto(s)</b> de su interés con número de catalogo.</span>
            </li>
            <li id="paso2">
              <span>Mande por correo electrónico la solicitud de cotización y de existencias.</span>
            </li>
            <li id="paso3">
              <span> Aceptada la misma, proporcionar sus datos para facturación.</span>
            </li>
            <li id="paso4">
              <span>Se le proporcionarán los datos bancarios, para que realice el deposito o transferencia electrónica.</span>
            </li>
            <li id="paso5">
              <span>Mande por correo electrónico, el comprobante de pago.</span>
            </li>
            <li id="paso6">
              <span>A los foráneos a más tardar en 24 hrs se le hará el envio correspondiente; a los locales se coordina la entrega de su pedido.</span>
            </li>
            <li id="paso7">
              <span>Recibirá por correo electrónico su factura y No. de guía.</span>
            </li>
          </ul>

        </div>

        <div id="atencionImg" class="atencionClientes large-12 columns"></div>

        <div id="footer" class="footer large-12 columns"></div>
      </div> <!--home-->
    </div> <!--contenido-->

</body>
</html>