<?php 
	include('layout/header.php');
 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb create-subcateg-crumb">
			<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li><a href="categories-subcategories.php#sub-categ-linker">SubCategories</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">Create</li>
		</ul>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li class="icon ion-filing pg-id-icon"></li>
					<li><label> Add SubCategory</label></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default panel-all-pages">
				<div class="panel-body">
					<form class="" role="form">
						<div class="form-group">
							<label class="control-label custom-form-lbl">category name</label>
							<select class="form-control custom-form-control custom-form-select" >
								<option>-----------</option>
								<option>BMX</option>
								<option>Racing Bikes</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label custom-form-lbl">name</label>
							<input type="text" name="" class="form-control custom-form-control">
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="button" name="" class="btn btn-primary btn-lg save-btn" value="SAVE">
							</div>
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
	$(document).ready(function(){

	});
</script>

<?php  
	include('layout/footer-two.php');
?>