$(document).ready(function(){
	$('.bxslider').bxSlider({
	  auto: true,
	  autoControls: true
	});
	$('.cabecera').load(base+'index.php/cinicio/header');
	$('.nav').load(base+'index.php/cinicio/nav');
	$('.sideBar').load(base+'index.php/cinicio/sideBar #sideBar');
	$('.atencionClientes').load(base+'index.php/cinicio/atencionClientes');
	$('.footer').load(base+'index.php/cinicio/footer');

	$("#ulCatalogo li").click(function(){
		base2 = "index.php/cinicio/";
		url = $(this).children("a").attr("href")
		window.location.href = base+base2+url;
	})

	$("#prom1").click(function(){
		$("#galeriaProm li > img").removeClass("clickProm")
		$(this).children("img").addClass("clickProm")
		aux = '<div class="large-12 columns"><div><center><img src="'+base+'media/css/img/promociones/banditas.jpg"/></center></div></div>'
		$("#promocion").html(aux);
		$("#promocion").show()

	})
	$("#prom2").click(function(){
		$("#galeriaProm li > img").removeClass("clickProm")
		$(this).children("img").addClass("clickProm")
		aux = '<div class="large-12 columns"><div><center><img src="'+base+'media/css/img/promociones/consumibles.jpg"/></center></div></div>'
		$("#promocion").html(aux);
		$("#promocion").show()
	})
	$("#prom3").click(function(){
		$("#galeriaProm li > img").removeClass("clickProm")
		$(this).children("img").addClass("clickProm")
		aux = '<div class="large-12 columns"><div><center><img src="'+base+'media/css/img/promociones/quimica-clinica-01.jpg"/></center></div></div>'
		aux2 = '<div class="large-12 columns"><div><center><img src="'+base+'media/css/img/promociones/quimica-clinica-02.jpg"/></center></div></div>'
		$("#promocion").html(aux+aux2);
		$("#promocion").show()
	})
});

function limpiaCamposForm(){
  $("#nombre, #correo, #empresa, #direccion, #solicitud, #ciudad, #telefono").val("");
}
function cargaModulo(idProducto){
	base2 = "index.php/cinicio/";
	location.href=base+base2+"masInformacion/"+idProducto;
}
