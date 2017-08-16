<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Example_model extends CI_Model {
	
	
	public function __construct(){
		// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function get_profil($filter=null){
		$this->db->select('kd_d_user');
		$this->db->select('nama_org');
		$this->db->from('d_user');
		if($filter != null){
			$this->db->where('nama_org', $filter);
		}
		$query = $this->db->get(); 
		return $query->result();		
	}
}