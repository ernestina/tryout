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
		//echo '<ul class="contents">';
        ?>
        <div class="col-lg-8">
		<?php foreach($result as $item) { ?>
			<div class="p-20">
                <h2 class="font-medium text-inverse"><?php echo $item->ID; ?></h2>
                <h6 class="card-subtitle">Kategori: Bahasa Inggris</h6><p><?php echo $item->SOAL; ?></p>
            
            <form class="m-t-40" novalidate>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <!--h5>Radio Buttons <span class="text-danger">*</span></h5-->
                        <?php
                            $jawaban = array("Jawaban A", "Jawaban B", "Jawaban C", "Jawaban D");
                            for($i=0; $i<count($jawaban); $i++ ){ ?>
                                <fieldset class="controls">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" value="<?php echo $i; ?>" name="styled_radio" required id="styled_radio1" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description"><?php echo $jawaban[$i]; ?></span> </label>
                                </fieldset>
                            <?php }
                        ?>
                            
                        </div>
                    </div>
                </div>
                <div class="text-xs-right">
                    <div class="btn-group pagination" role="group" aria-label="Basic example">
                        <?php 
                            if($page_number > 1){
                                $prev_link = $page_number-1;
                                echo '<a href="#" data-page="'.$prev_link.'" title="Next" class="btn btn-secondary" role="button">Prev</a>';		
                            }
                                   
                            if($page_number != $get_total_rows){
                                $next_link = $page_number+1;
                                echo '<a href="#" data-page="'.$next_link.'" title="Next" class="btn btn-secondary" role="button">Next</a>';		
                            }
                        ?>
                    </div>
                </div>
            </form>
            
            </div>
        </div>
        <div class="col-lg-4 b-l">
            <div class="card-block">
               
                <div class="col-sm-12 m-t-20 m-b-40">
                    <h4 class="font-medium text-inverse">Waktu Sisa:</h4>
                    <h1 class = "text-center"><span class="time">01:00:00</span></h1><hr>
                </div>
                <div class="col-sm-12 m-t-20 m-b-40">
                    <h4 class="font-medium text-inverse">Kategori:</h4>
                    <form action="#">
                        <div class="form-group">
                            <!--label class="control-label">Category</label-->
                            <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 5</option>
                                <option value="Category 4">Category 4</option>
                            </select>
                        </div>
                    </form>
                    <div class="row pagination">
                    <?php
                    //echo '';
                    for($i=1;$i<=$get_total_rows; $i++){
                        echo '<div class="col-md-6 col-lg-3 col-xlg-3"><div class="card">
                        <a href="#" data-page="'.$i.'" class="btn btn-lg btn-success btn-circle">'.$i.' '.'</a>
                        </div></div>'; 
                        //<button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i> </button>
                    }
                    ?>
                    </div>
                </div>
            </div>
            
        </div>
                <!--h4 class="font-medium text-inverse">Kategori:</h4>
                    <div class="col-sm-12 m-t-20 m-b-20">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                </select>
                            </div>
                        </form>
                </div-->
		<?php	
		}?>
        <?php
		//echo '</ul>';

		//echo '<div align="center">';
		// To generate links, we call the pagination function here.
		//$data['total_soal'] = $get_total_rows;
        
        //$this->load->view('pages/timer', $data);
        //$this->load->view('pages/switcher', $data);
        //var_dump($data['total_soal']);
		/*echo '<br><br><div align="center">';
		echo '<div class="pagination">';
		for($i=1;$i<=$get_total_rows; $i++){
			echo '<a href="#" data-page="'.$i.'">'.$i.'</a>&nbsp;&nbsp;'; 
		}
		echo '</div>';
		echo '</div>';	
		echo '</div>';	*/
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
		$data['get_total_rows'] = sizeOf($this->soal_model->get_soal());
        //var_dump($data['record']);
        
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/'.$page, $data);
        //$this->load->view('pages/switcher', $data);
        $this->load->view('templates/footer', $data);
	}	
	
}