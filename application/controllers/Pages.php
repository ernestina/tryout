<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
	private $data;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
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
	
	public function tes(){
		$this->load->model('example_model'); 
		$this->data['record'] = $this->example_model->get_profil('KANWIL ACEH');
		//$this->load->view('header_view', $this->data);
		$this->load->view('example_view', $this->data);
		//$this->load->view('footer_view');
	}	
	
}