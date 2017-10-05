<?php foreach($result as $item):  ?>
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
<?php endforeach; ?>
