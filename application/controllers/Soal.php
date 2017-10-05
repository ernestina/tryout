<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Soal extends CI_Controller {
	private $data;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('soal_model');
	}
	
	public function view($page = null){
        if ( !file_exists(APPPATH.'views/mypages/'.$page.'.php')){
			show_404();
        }
		
        $this->data['title'] = 'Tryout STAN';
        $this->load->view('templates/topbar', $this->data);
        $this->load->view('templates/sidebar');
        $this->load->view('mypages/'.$page);
        $this->load->view('templates/myfooter');		
	}
	
	public function load_soal(){
		$item_per_page = 1;
		
        //Get page number from Ajax
		if(isset($_POST["page"])){
			$this->data['page_number'] = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
			if(!is_numeric($this->data['page_number'])){die('Invalid page number!');} //incase of invalid page number
		}else{
			$this->data['page_number'] = 1; //if there's no page number, set it to 1
		}
		
		$this->data['get_total_rows'] = sizeOf($this->soal_model->get_soal());
		$total_pages = ceil($this->data['get_total_rows']/$item_per_page);

		$this->data['result'] = $this->soal_model->get_soal($item_per_page, $this->data['page_number']);

		$this->load->view('mypages/load_soal_view.php', $this->data);
	}
	
	public function load_all_soal(){
		$this->data['get_total_rows'] = sizeOf($this->soal_model->get_soal());
		$this->load->view('mypages/load_all_soal_view.php', $this->data);
	}
}

