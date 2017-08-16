<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class soal_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_soal(){

        $sql = "select * from soal";
        
		/*if($filter != null){
			$this->db->where('kd_satker', $filter);
		}*/
        
		$query = $this->db->query($sql);
        //var_dump($query->result()); die;
		return $query->result();
	}

}