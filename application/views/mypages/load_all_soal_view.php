<div class="row pagination">
<?php
	$i = 1;
	for($i; $i<=$get_total_rows; $i++){
		if($i == 1){
			echo '<div class="col-md-6 col-lg-3 col-xlg-3"><div class="card">
			<a href="#" data-page="'.$i.'" class="btn btn-lg btn-success btn-circle">'.$i.' '.'</a>
			</div></div>';			
		}else{
			echo '<div class="col-md-6 col-lg-3 col-xlg-3"><div class="card">
			<a href="#" data-page="'.$i.'" class="btn btn-lg btn-success btn-circle">'.$i.' '.'</a>
			</div></div>';
		}
	}                   
?>
</div>