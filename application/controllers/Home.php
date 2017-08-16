<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	private $data;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function index(){
		
	}
	
}