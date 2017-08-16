</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2017
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'assets/plugins/jquery/jquery.min.js'; ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/tether.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url().'main/js/jquery.slimscroll.js'; ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'main/js/waves.js'; ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'main/js/sidebarmenu.js'; ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url().'assets/plugins/sticky-kit-master/dist/sticky-kit.min.js'; ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'main/js/custom.min.js'; ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url().'assets/plugins/chartist-js/dist/chartist.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js'; ?>"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url().'assets/plugins/echarts/echarts-all.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/plugins/toast-master/js/jquery.toast.js'; ?>"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url().'main/js/dashboard1.js'; ?>"></script>
    <script src="<?php echo base_url().'main/js/toastr.js'; ?>"></script>
    <!--script src="<?php //echo base_url().'main/js/pagination.min.js'; ?>"></script-->

    <!--script type="text/javascript">
	$(document).ready(function() {
		$("#results" ).load("soal.php"); //load initial records
		//executes code below when user click on pagination links
		$("#results").on( "click", ".pagination a", function (e){
			e.preventDefault();
			$(".loading-div").show(); //show loading element
			var page = $(this).attr("data-page"); //get page number from link
			$("#results").load("soal.php",{"page":page}, function(){ //get content from PHP page
				$(".loading-div").hide(); //once done, hide loading element
			});
		});	
	});
	</script-->


    <!--script>
        $.toast({
            heading: 'Welcome to Monster admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'info',
            hideAfter: 3000, 
            stack: 6
        });
    </script-->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'assets/plugins/styleswitcher/jQuery.style.switcher.js'; ?>"></script>

    <!-- jQuery peity -->
    <script src="<?php echo base_url().'assets/plugins/tablesaw-master/dist/tablesaw.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/tablesaw-master/dist/tablesaw-init.js';?>"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'assets/plugins/styleswitcher/jQuery.style.switcher.js';?>"></script>


</body>

</html>