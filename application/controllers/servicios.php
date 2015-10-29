<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Servicios extends CI_Controller {
		
		public function __construct(){
			parent::__construct();			
			$this->load->helper(array('html', 'url', 'date'));
 		}
 			 			
		function servicios1(){$this->load->view("servicios1");}
		function servicios2(){$this->load->view("servicios2");}
		function servicios3(){$this->load->view("servicios3");}
		function servicios4(){$this->load->view("servicios4");}
		function servicios5(){$this->load->view("servicios5");}

	}//Fin de la clase
?>
