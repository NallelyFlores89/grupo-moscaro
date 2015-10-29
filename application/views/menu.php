<!-- <ul class="large-12 columns large-centered">
        <li class="large-1 columns"><a href="">Inicio</a></li>
        <li class="large-2 columns"><a href="quienes_somos">¿Quiénes somos?</a></li>
        <li class="large-2 columns"><a href="promociones">Promociones</a></li>
        <li class="large-2 columns"><a href="servicios">Servicios</a></li>
        <li class="large-2 columns"><a href="catalogo">Catálogo</a></li>
        <li class="large-2 columns"><a href="como_comprar">¿Cómo comprar?</a></li>
        <li class="large-1 columns"><a href="contacto">Contacto</a></li>
</ul> -->
<script src="<?= base_url()?>media/foundation/js/foundation/foundation.topbar.js"></script>
<script>
	$(document).ready(function(){
		base2 = "index.php/cinicio/"
		$(".nav ul li a").click(function(event){
			event.preventDefault();
			window.location.href = base+base2+$(this).attr("href");
		})
	});

	$(document).foundation()
</script>

<nav class="top-bar" data-topbar role="navigation">
  	<ul class="title-area">
  	    <li class="name"></li>
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  	</ul>

	<section class="top-bar-section">
		<ul class="left">
		<li><a href="">Inicio</a></li>
        <li><a href="quienes_somos">¿Quiénes somos?</a></li>
        <li><a href="promociones">Promociones</a></li>
        <li><a href="servicios">Servicios</a></li>
        <li><a href="catalogo">Catálogo</a></li>
        <li><a href="como_comprar">¿Cómo comprar?</a></li>
        <li><a href="contacto">Contacto</a></li>
	    </ul>
	</section>
</nav>