<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
	private $data;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
    
    //fungsi ini di-load oleh javascript di page soal
    public function load_soal(){
        $item_per_page = 1;
        //Get page number from Ajax
		if(isset($_POST["page"])){
			$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
			if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
		}else{
			$page_number = 1; //if there's no page number, set it to 1
		}	
        
		$this->load->model('soal_model');
		
		$get_total_rows = sizeOf($this->soal_model->get_soal());
		$total_pages = ceil($get_total_rows/$item_per_page);
		
		$result = $this->soal_model->get_soal($item_per_page, $page_number);
		//var_dump($result); die;
		//for view
		echo '<ul class="contents">';
		foreach($result as $item) {
			echo '<li>';
			echo  $item->id. '. <strong>' .$item->soal.'</strong>';
			echo '</li>';
		}
		echo '</ul>';

		echo '<div align="center">';
		// To generate links, we call the pagination function here.
		echo '<ul class="pagination">';
		if($page_number > 1){
			$prev_link = $page_number-1;
			echo '<li><a href="#" data-page="'.$prev_link.'" title="Next">&laquo;</a></li>';		
		}
		
		if($page_number != $get_total_rows){
			$next_link = $page_number+1;
			echo '<li><a href="#" data-page="'.$next_link.'" title="Next">&raquo;</a></li>';		
		}
		echo '</ul>';
		echo '</div>';

		echo '<br><br><div align="center">';
		echo '<div class="pagination">';
		for($i=1;$i<=$get_total_rows; $i++){
			echo '<a href="#" data-page="'.$i.'">'.$i.'</a>&nbsp;&nbsp;'; 
		}
		echo '</div>';
		echo '</div>';	
    }
    
    public function view($page = null){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        //$data['title'] = ucfirst($page); // Capitalize the first letter
        $data['title'] = 'Tryout STAN'; // Capitalize the first letter

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
	
	public function index($page = 'content'){
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        //$data['title'] = ucfirst($page); // Capitalize the first letter
        $data['title'] = 'Tryout STAN'; // Capitalize the first letter

        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}
	
	public function tes($page = 'soal'){
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		$data['title'] = 'Tryout STAN'; // Capitalize the first letter
        
        $this->load->model('soal_model'); 
        //var_dump($this->soal_model->get_soal()); die;
		$data['record'] = $this->soal_model->get_soal();
        //var_dump($data['record']);
        
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}	
	
}