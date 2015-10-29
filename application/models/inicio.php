<?php if(! defined('BASEPATH')) exit ('No direct script acces allowed');

	class Inicio extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function traeCatalogo(){
			$query = $this->db->query('SELECT * FROM catalogo');
			return $query->result_array();
		}
		function traeServicios(){
			$query = $this->db->query('SELECT * FROM servicios');
			return $query->result_array();
		}	

		function trae_productos_catalogo($idcatalogo){
			$this->db->select("*");
			$this->db->from('productos');
			$this->db->where('catalogo', $idcatalogo); 
			$query = $this->db->get();
			return $query->result_array();
		}	
		
		function trae_productos_id($idproducto){
			$this->db->select("*");
			$this->db->from('productos');
			$this->db->where('idproducto', $idproducto); 
			$query = $this->db->get();
			return $query->row_array();
		}	
	} //Fin de la clase

?>


		

 