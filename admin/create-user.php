<?php 
	include('layout/header.php');
 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb create-users-crumb">
			<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li><a href="users.php">Users</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">Create</li>
		</ul>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li><i class="icon ion-person-add pg-id-icon"></i></li>
					<li><label>Add User</label></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel ">
			<div class="panel-default panel-all-pages">
				<div class="panel-body">
					<form role="form" action="" enctype="multipart/form-data">
						<div class="form-group">
							<label class="custom-form-lbl">name</label>
							<input type="text" name="" placeholder="name" class="form-control custom-form-control">
						</div>
						<div class="form-group">
							<label class="custom-form-lbl">email</label>
							<input type="email" name="" placeholder="email" class="form-control custom-form-control">
						</div>
						<div class="form-group">
							<label class="custom-form-lbl">password</label>
							<input type="password" name="" placeholder="password" class="form-control custom-form-control">
						</div>
						<div class="form-group">
							<label class="custom-form-lbl">upload profile image</label>
							<!-- <input type="file" name="" class="btn btn-primary upload-input" > -->
							<input type="file"  onchange="imagepreview(this);" id="imgpreview-input"  required="" name="imgpreview-input" class="upload-input">
							
						</div>
						<div class="form-group">
							<div class="col-sm-4">
								<div class="panel">
									<div class="panel-default">
										<div class="panel-body">
											<img id="userpreview"  class="img-responsive" >
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="button" name="" class="btn btn-primary btn-lg save-btn" value="SAVE" >
							</div>
							
							<!-- NOTE TO SELF -->
							<!-- I'm using  input type="button" here because otherwise it acts like a get request in the url-->
						</div>
					</form>

					
					
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php 
	include('layout/footer-one.php'); 
?>

<script type="text/javascript">
	function imagepreview(input){
		var $userpreview = $('#userpreview');
        if (input.files && input.files[0]) {
            var filerd = new FileReader();
            filerd.onload = function (e) {
                $userpreview.attr("src" , e.target.result);
            };
            filerd.readAsDataURL(input.files[0]);
        }
}
	// $(document).ready(function(){

		
	// });
</script>

<?php  
	include('layout/footer-two.php');
?>