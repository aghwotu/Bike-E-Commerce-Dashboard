<?php 
	// ## NOTE:: The session has already been started in the header file
	include('layout/header.php');
	include('show-subcategory.php');

	if (!isset($_SESSION['add-subcateg-error'])) {
		
	}else {
		if (count($_SESSION['add-subcateg-error']) > 0) {
			foreach ($_SESSION['add-subcateg-error'] as $err) {
				echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-danger alert-dismissable">
									<p>'.$err.'</p>
								</div>
							</div>
						</div>';
				echo '<br>';
			}
			unset($_SESSION['add-subcateg-error']);
		}
	}


	if (!isset($_SESSION['add-subcateg-success'])) {
		
	}else{
		if (count($_SESSION['add-subcateg-success']) > 0) {
			
			echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-info alert-dismissable">
									<p>'.$_SESSION['add-subcateg-success'][0].'</p>
								</div>
							</div>
					</div>';
			echo 	'<br>';
			echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-info alert-dismissable">
									<p><a href="create-product.php">'.$_SESSION['add-subcateg-success'][1].'</a></p>
								</div>
							</div>
					</div>';
			unset($_SESSION['add-subcateg-success']);
		}
	}



 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb subcateg-crumb">
			<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">SubCategories</li>
		</ul>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li class="icon ion-filing pg-id-icon"></li>
					<li><label>SubCategories</label></li>
					<li>
						<a href="create-subcategory.php" class="btn btn-success btn-add">
							<i class="icon ion-ios-plus-outline"></i>
							Add New
						</a>
					</li>
					<li><button class="btn btn-danger btn-bulk-delete">
						<i class="icon ion-trash-a"></i>
						Bulk Delete
					</button></li>
					<li>
						
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-default panel-all-pages">
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped ">
					<thead>
						<tr>
							<th></th>
							<th>#</th>
							<th>Name</th>
							<th>Number of Products</th>
							<th>Category name</th>
							<th>Date and Time Created</th>
							<th>Actions</th>
							<!-- the actions that would be available to the 
								categories are VIEW, EDIT and DELETE -->

						</tr>
					</thead>
					<tbody>
						<?php 

							$subcategories = showSubCategory();
							echo($subcategories);

						 ?>
					</tbody>
						
				</table>
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