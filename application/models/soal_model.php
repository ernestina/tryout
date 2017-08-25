<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class soal_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_soal($item_per_page=null, $page_number=null){

		$page_position = (($page_number-1) * $item_per_page);		
		
		$this->db->select('ID');
		$this->db->select('SOAL');
		$this->db->from('SOAL');
		if($item_per_page != null){
			$this->db->limit($item_per_page, $page_position);
		}
		$query = $this->db->get(); 
        
        //var_dump($query->result());
        
		return $query->result();
	}

}