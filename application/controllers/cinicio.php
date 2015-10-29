<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class CInicio extends CI_Controller {
		
		public function __construct(){
			parent::__construct();			
			$this->load->helper(array('html', 'url', 'date'));
			$this->load->model("inicio");
 		}
				
 		function index(){
 			$this->load->view("index.php");
 		}
 		function header(){
 			$this->load->view("cabecera.php");
 		} 		
 		function nav(){
 			$this->load->view("menu.php");
 		}
 		function footer(){
 			$this->load->view("footer.php");
 		}
 		function sideBar(){
 			$this->load->view("sideBar.php");
 		}
 		function atencionClientes(){
 			$this->load->view("atencionClientes.php");
 		}

 		function catalogo(){
 			$contador = 0;
 			$file = fopen(base_url()."media/catalogoBD.csv","r");
			while (($line = fgetcsv($file)) !== FALSE) {
			  //$line is an array of the csv elements
				if($contador != 0){
					$datos["catalogos"][$contador]['idcatalogo'] = trim($line[0]);
					$datos["catalogos"][$contador]['nombre'] = trim($line[1]);
					$datos["catalogos"][$contador]['imagen'] = trim($line[2]);
					$datos["catalogos"][$contador]['ruta'] = trim($line[3]);
				}
				$contador++;
			}
			fclose($file);
/*			echo "<pre>";
			print_r($datos);*/
 			$this->load->view("catalogo.php", $datos);	
 		}

 		function catalogo_banco_de_sangre(){
 			$datos['productos'] = $this->traeProductos(1);
 			$this->load->view("catalogo_banco_de_sangre.php",$datos);
 		}

 		function catalogo_consumibles(){
 			$datos['productos'] = $this->traeProductos(2);
 			$this->load->view("catalogo_consumibles.php",$datos);
 		}

 		function catalogo_flebotomia(){
 			$datos['productos'] = $this->traeProductos(3);

 			$this->load->view("catalogo_flebotomia.php",$datos);
 		}

 		function catalogo_gradillas(){
 			$datos['productos'] = $this->traeProductos(4);
 			$this->load->view("catalogo_gradillas.php",$datos);
 		}

 		function catalogo_hematologia(){
 			$datos['productos'] = $this->traeProductos(5);

 			$this->load->view("catalogo_hematologia.php",$datos);
 		}

 		function catalogo_instrumentos_y_equipos(){
 			$datos['productos'] = $this->traeProductos(6);

 			$this->load->view("catalogo_instrumentos_y_equipos.php",$datos);
 		}

 		function catalogo_micro_pipetas(){
 			$datos['productos'] = $this->traeProductos(7);

 			$this->load->view("catalogo_micro_pipetas.php",$datos);
 		}

 		function catalogo_organizadores_para_lab(){
 			$datos['productos'] = $this->traeProductos(8);
 			$this->load->view("catalogo_organizadores_para_laboratorio.php",$datos);
 		}

 		function catalogo_pipetas_transfer(){
 			$datos['productos'] = $this->traeProductos(9);
 			$this->load->view("catalogo_pipetas_transfer.php",$datos);
 		}

 		function catalogo_pruebas_rapidas(){
 			$datos['productos'] = $this->traeProductos(10);
 			$this->load->view("catalogo_pruebas_rapidas.php",$datos);
 		}

  		function catalogo_puntillas(){
 			$datos['productos'] = $this->traeProductos(11);
 			$this->load->view("catalogo_puntillas.php",$datos);
 		}

 		function catalogo_quimica_clinica(){
 			$datos['productos'] = $this->traeProductos(12);
 			$this->load->view("catalogo_quimica_clinica.php",$datos);
 		}

  		function catalogo_tubos_capilares(){
 			$datos['productos'] = $this->traeProductos(13);
 			$this->load->view("catalogo_tubos_capilares.php",$datos);
 		}

  		function catalogo_tubos_conicos(){
 			$datos['productos'] = $this->traeProductos(14);
 			$this->load->view("catalogo_tubos_conicos.php",$datos);
 		}

  		function catalogo_tubos_y_tapas(){
 			$datos['productos'] = $this->traeProductos(15);
 			$this->load->view("catalogo_tubos_y_tapas.php",$datos);
 		}

  		function catalogo_urianalisis(){
 			$datos['productos'] = $this->traeProductos(16);
 			$this->load->view("catalogo_urianalisis.php",$datos);
 		}

  		function catalogo_inmunologia(){
 			$datos['productos'] = $this->traeProductos(17);
 			$this->load->view("catalogo_inmunologia.php",$datos);
 		} 		
  		function catalogo_mezcladoras(){
 			$datos['productos'] = $this->traeProductos(18);
 			$this->load->view("catalogo_mezcladoras.php",$datos);
 		} 
  		function catalogo_microscopios(){
 			$datos['productos'] = $this->traeProductos(19);
 			$this->load->view("catalogo_microscopios.php",$datos);
 		} 
  		function catalogo_centrifugas(){
 			$datos['productos'] = $this->traeProductos(20);
 			$this->load->view("catalogo_centrifugas.php",$datos);
 		} 	 	
  		function catalogo_camaras_digitales(){
 			$datos['productos'] = $this->traeProductos(21);
 			$this->load->view("catalogo_camaras_digitales.php",$datos);
 		} 
  		function catalogo_contadores(){
 			$datos['productos'] = $this->traeProductos(22);
 			$this->load->view("catalogo_contadores.php",$datos);
 		}  	
  		function catalogo_elisas(){
 			$datos['productos'] = $this->traeProductos(23);
 			$this->load->view("catalogo_elisas.php",$datos);
 		} 			 			
 		function servicios(){

 			$this->load->view("servicios.php");	
 		} 		

 		function traeProductos($num_catalogo){
 			$datos = $this->inicio->trae_productos_catalogo($num_catalogo);
 			return $datos;

 			/*$contador = 0;
 			$file = fopen(base_url()."media/productosMoscaro.csv","r");
			while (($line = fgetcsv($file)) !== FALSE) {
				$catalogoExcel = $line[7];
				if($contador != 0 && ($catalogoExcel == $num_catalogo)){
					$productos[$contador]['idproducto'] = trim($line[0]);
					$productos[$contador]['nombre'] = trim($line[1]);
					$productos[$contador]['unidad'] = trim($line[2]);
					$productos[$contador]['imagen'] = trim($line[3]);
					$productos[$contador]['descripcion'] = trim($line[4]);
					$productos[$contador]['precio'] = trim($line[5]);
					$productos[$contador]['categoria'] = trim($line[6]);
					$productos[$contador]['catalogo'] = trim($line[7]);
				}
				$contador++;
			}
			fclose($file);
			if (isset($productos)){
				return $productos;			
			}else{
				return -1;
			}*/
 		}
 		function traeProductosId($idproducto){
 			$datos = $this->inicio->trae_productos_id($idproducto);
 			return $datos;
 			/*$file = fopen(base_url()."media/productosMoscaro.csv","r");
			while (($line = fgetcsv($file)) !== FALSE) {
				$id_producto = trim($line[0]);
				if($id_producto == $idproducto){
					$productos['idproducto'] = trim($line[0]);
					$productos['nombre'] = trim($line[1]);
					$productos['unidad'] = trim($line[2]);
					$productos['imagen'] = trim($line[3]);
					$productos['descripcion'] = trim($line[4]);
					$productos['precio'] = trim($line[5]);
					$productos['categoria'] = trim($line[6]);
					$productos['catalogo'] = trim($line[7]);
				}else{
					$productos['idproducto'] = -1;
				}
			}
			fclose($file);
			return $productos;			*/
 		}
 		function masInformacion($idproducto){
 			$datos['datos'] = $this->traeProductosId($idproducto);
 			$this->load->view("moduloProductos.php", $datos);
 		}

 		function como_comprar(){
 			$this->load->view("como_comprar.php");
 		}

		function contacto(){
			if($_POST != NULL){
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from($_POST['correo'], $_POST['nombre']);
				$this->email->to('direccion@grupomoscaro.com','piero@grupomoscaro.com');
				$nombre = $_POST['nombre'];
				$email = $_POST['correo'];
				$tel = $_POST['telefono'];
				$empresa = $_POST['empresa'];
				$ciudad = $_POST['ciudad'];
				$solicitud = $_POST['solicitud'];

				$mensajeTexto = "<b>".strtoupper($nombre)."</b> le ha enviado un mensaje:<br><br><br>".
				"<b>email:</b> ".$email."<br><br>".
				"<b>telefono:</b> ".$tel."<br><br>".
				"<b>empresa/laboratorio:</b> ". $empresa."<br><br>";
				"<b>ciudad:</b> ". $ciudad."<br><br>";
				"<b>solicitud:</b> ". $solicitud."<br><br>";

				$this->email->subject('Pedido grupo moscaro');
				$this->email->message($mensajeTexto);

				if($this->email->send()){
					$this->load->view("gracias.php");
				}else{
					echo $this->email->print_debugger();
				}

			}else{
 				$this->load->view("contacto.php");
	  		}
 		} 

 		function hemosure(){
 			$this->load->view("hemosure.php");
 		}

 		function promociones(){
 			$this->load->view("promociones.php");
 		}

  		function quienes_somos(){
 			$this->load->view("quienes_somos.php");
 		}
	}//Fin de la clase
?>
