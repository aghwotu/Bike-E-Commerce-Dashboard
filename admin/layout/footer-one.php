</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- jQuery -->
<!-- <script src="js/jquery.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<!-- <script src="js/bootstrap.js"></script> -->

<!-- Custom JavaScript -->
<!-- <script src="js/script.js"></script> -->


<!-- Menu Toggle Script -->
<script>
$(document).ready(function(){

	$("#wrapper").toggleClass("toggled");

	$("#menu-toggle").click(function(e) {
	    e.preventDefault();
	    $("#wrapper").toggleClass("toggled");
	});


});

</script>
