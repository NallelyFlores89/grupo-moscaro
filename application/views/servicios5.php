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
    <h1>Pruebas Rápidas</h1>
  </div>
    <div class="tabla large-12 columns large-centered">
      <table border="2" align="center" cellpadding="1">
        <tr>
          <td>
            <img src="<?=base_url()?>media/css/img/PruebasRapidas/1.jpg" alt="Influenza">
            <p><a href="<?=base_url()?>media/css/img/pdf3/Influenza.pdf">Influenza</a></p>
          </td>
          <td>
            <img src="<?= base_url()?>media/css/img/PruebasRapidas/2.jpg" alt="iFoB, Sangre Oculta">
            <p>iFoB, Sangre Oculta</p>
            <p><a href="<?= base_url()?>media/css/img/pdf3/SangreOcultaTira.pdf">Tira</a> / <a href="<?= base_url()?>media/css/img/pdf3/SangreOcultaCasete.pdf">Casete</a></p>
          </td>
        </tr>
        <tr>
          <td>
            <img src="<?= base_url()?>media/css/img/PruebasRapidas/3.jpg" alt="Antidoping">
            <p><a href="<?= base_url()?>media/css/img/pdf3/Antidoping.pdf">Antidoping</a></p>
          </td>
          <td>
            <img src="<?= base_url()?>media/css/img/PruebasRapidas/5.jpg" alt="Marcadores Tumorales y Cardiacos">
            <p><a href="<?= base_url()?>media/css/img/pdf3/marcadores%20tum%20y%20card.htm">Marcadores Tumorales y Cardiacos</a></p>
          </td>
        </tr>
        <tr>
          <td>
            <img src="<?= base_url()?>media/css/img/PruebasRapidas/4.jpg" alt="Prueba de Embarazo">
            <p>Prueba de Embarazo</p>
            <p><a href="<?= base_url()?>media/css/img/pdf3/PruebasEmbarazoTira.pdf">Tira</a> / <a href="<?= base_url()?>media/css/img/pdf3/PruebaEmbarazoCasete.pdf">Casete</a></p>
          </td>
          <td>
            <img src="<?= base_url()?>media/css/img/PruebasRapidas/5.jpg" alt="Enfermedades Infecciosas">
            <p><a href="<?= base_url()?>media/css/img/pdf3/enfermedades%20infecciosas.htm">Enfermedades Infecciosas</a></p>
          </td>
        </tr>       
      </table>
    </div>
</div><!--home-->


      <div id="atencionImg" class="atencionClientes large-12 columns"></div>
      <div id="footer" class="footer large-12 columns"></div>
    </div>
</body>
</html>