 		function catalogo_consumibles(){
 			$datos['productos'] = $this->Inicio->trae_productos_catalogo(2);
 			$this->load->view("catalogo_consumibles.php",$datos);
 		}

 		/* 		function servicios2(){
 			$datos['servicios'] = $this->Inicio->traeServicios();
 			$this->load->view("servicios.php", $datos);	
 		}*/

 		/* 		function catalogo2(){
 			$datos['catalogos'] = $this->Inicio->traeCatalogo();
 			$this->load->view("catalogo.php");	
 		}*/

 		