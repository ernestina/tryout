<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="row">
					<div id="ngetes" class="col-lg-2">
						
					</div>				
					<div id="results" class="col-lg-6">
						
					</div>
					<div class="col-lg-4 b-l">
						<div class="card-block">
							<div class="col-sm-12 m-t-20 m-b-40">
								<h4 class="font-medium text-inverse">Waktu Sisa:</h4>
								<h1 class ="text-center"><div id="timer"></div></h1><hr>
							</div>
							<div class="col-sm-12 m-t-20 m-b-40">
								<h4 class="font-medium text-inverse">Kategori:</h4>
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
								<div id="all_soal">
								
								</div>
							</div>
						</div>
					</div>				
        </div>
      </div>
    </div>
</div>
    
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->


<script>
var upgradeTime = 4;
var seconds = upgradeTime;
function timer() {
    var days        = Math.floor(seconds/24/60/60);
    var hoursLeft   = Math.floor((seconds) - (days*86400));
    var hours       = Math.floor(hoursLeft/3600);
    var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
    var minutes     = Math.floor(minutesLeft/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('timer').innerHTML = hours + ":" + minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('timer').innerHTML = "Completed";
    } else {
        seconds--;
    }
}
var countdownTimer = setInterval('timer()', 1000);
</script>