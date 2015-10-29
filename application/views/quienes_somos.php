<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>¿Quiénes somos?</title>
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
          $(".sideBar").css('height','880px')
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
          ¿Quiénes somos?
        </div>
        <div id="quienesSomosTexto" class="large-12 columns large-centered">
            <p>GRUPO MOSCARO es una empresa 100% mexicana que tiene como objetivo satisfacer las necesidades de abastecimiento en los laboratorios de análisis clínicos de toda la república, con productos innovadores y de la mejor calidad, para su mejora constante.</p>
            <p>A continuación mencionamos algunas de las lineas con las que contamos para su laboratorio.</p>

            <ul id="quienesSomosLista">
                <li>Reactivos para Química Clínica: Pointe Scientific entre los que destacan: Glucosa Oxidasa y Hexoquinasa, Triglicéridos, Glicohemoglobina, HDL, Creatinina, Biliburrina total y directa, Controles, Calibradores y más.</li>
                <li>Aplicaciones disponibles para equipos automatizados y semi automatizados.</li>
                <li>Reactivos para Hematología: CDS (Clinical Diagnostic Solutions) como: Diluyentes, Lizantes, Detergentes, Limpiadores Enzimáticos, Controles y Calibradores, para equipos Coulter, Cell dyn, Micros/ABX y Medonic y Medonic Serie M.</li>
                <li>Pruebas rápidas: de hCG tira, hCG casette, PSA, Hpylorí Hepatitis A, B y C, Chlamydia, HIV, Troponina, <b><a href="<?= base_url()?>index.php/cinicio/hemosure">Sangre Oculta (prueba inmunológica Hemosure iFOB)</a></b>, Antidoping 1, 2 y 5 parametros.</li>
                <li>Consumibles: Pipetas transfer 3 y 5 ml, Puntillas, Tubos eppendorf, Curitas rendondos, segmentos y copas azules para cobas, copas para muestra y magazines para Express 500/550, Torniquetes, Detector de Venas, Poster Flebotomía, Gradillas, Protectores Faciales, etc.</li>
                <li>Equipos: Química Clínica Automatizados y semi automatizados, (<b>Chemwell T</b>, Pointe 180 III) para Hematólogia, ( Medonic serie M) para Elisas, (Stat Fax) Microscopios y centrifugas (Unico)</li>
            </ul>
            <p>Cuenta con la asesoría personalizada y vía telefónica desde el extranjero, para resolver sus dudas acerca del manejo de cualquiera de nuestros productos.</p>
            <p>“CALIDAD Y FLEXIBILIDAD A PRECIOS COMPETITIVOS”</p>
            <p>USTED ES LO MAS IMPORTANTE PARA NOSOTROS</p>
        </div>

        <div id="atencionImg" class="atencionClientes large-12 columns"></div>

        <div id="footer" class="footer large-12 columns"></div>
      </div> <!--home-->
    </div> <!--contenido-->

</body>
</html>