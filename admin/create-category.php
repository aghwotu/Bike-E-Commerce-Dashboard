<?php 

	// 	NOTE:: the session has already been started in the header file
	include('layout/header.php');
	if (!isset($_SESSION['add-categ-error'])) {
		
	}else{
		if (count($_SESSION['add-categ-error']) > 0) {
			foreach ($_SESSION['add-categ-error'] as $err) {
				echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-danger alert-dismissable">
									<p>'.$err.'</p>
								</div>
							</div>
						</div>';
			}
			unset($_SESSION['add-categ-error']);
		}
	}
 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb create-categ-crumb" >
		 	<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
		 	<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li><a href="categories.php">Categories</a></li> 
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">Create</li>
		</ul>
	</div>
	
	<div class="row">
		<div class="panel add-categ-panel">
			<div class="panel-default ">
				<ul class=" ul-panel-header">
					<li><i class="icon ion-ios-albums pg-id-icon"></i></li>
					<li><label class="">Add Category</label></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-default panel-all-pages">
			<div class="panel-body ">
				<form role="form">
					<div class="form-group">
						<label class="control-label custom-form-lbl">name</label>
						<input type="" name="newcateg" class="form-control custom-form-control" placeholder="enter category name" id="new-categ">
					</div>
					<div class="form-group">
						<!-- <input type="button" name="" class="btn btn-primary btn-lg save-btn" value="SAVE" id="create-categ-btn"> -->
						<!-- <button type="submit" name="submit-categ" class="btn btn-primary btn-lg save-btn" id="new-categ-btn">SAVE</button> -->
						<input type="button" name="submit-categ" class="btn btn-primary btn-lg save-btn" id="new-categ-btn" value="SAVE" />
						<!-- NOTE TO SELF -->
							<!-- I'm using  input type="button" here because otherwise it acts like a get request in the url-->

						
					</div>
				</form>

				<p id="pdemo" style="display:none;">This is a paragraph</p>
				
			</div>
			
		</div>
		
	</div>
</div>

<?php 
	include('layout/footer-one.php'); 
?>

<script type="text/javascript">

	// $('#new-categ-btn').click(function(){
	// 	alert("Hello world");
	// });
</script>

<?php  
	include('layout/footer-two.php');
?>