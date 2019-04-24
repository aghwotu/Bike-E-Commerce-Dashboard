<?php 
	include('layout/header.php');
	include('show-product.php');

	if (!isset($_SESSION['add-product-error'])) {
		
	}else{
		if (count($_SESSION['add-product-error']) > 0) {
			foreach ($_SESSION['add-product-error'] as $err) {
				echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-danger alert-dismissable">
									<p>'.$err.'</p>
								</div>
							</div>
						</div>';
				echo '<br>';
			}
			unset($_SESSION['add-product-error']);
		}
	}


	if (!isset($_SESSION['add-product-success'])) {
		
	}else{
		if (count($_SESSION['add-product-success']) > 0) {
			
			foreach ($_SESSION['add-product-success'] as $success) {
				echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-info alert-dismissable">
									<p>'.$success.'</p>
								</div>
							</div>
						</div>';
				echo '<br>';
			}
			unset($_SESSION['add-product-success']);
		}
	}
 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb products-crumb">
			<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">Products</li>
		</ul>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li><i class=" icon ion-leaf pg-id-icon"></i></li>
					<li><label>Products</label></li>
					<li>
						<a href="create-product.php" class="btn btn-success btn-add">
							<i class="icon ion-ios-plus-outline"></i>
							Add New
						</a>
					</li>
					<li>
						<button class="btn btn-danger btn-bulk-delete">
							<i class="icon ion-trash-a"></i>
							Bulk Delete
						</button>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-default panel-all-pages">
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th></th>
								<th>#</th>
								<th>Name</th>
								<th>Product Image</th>
								<th>Brake Type</th>
								<th>Number of Gears</th>
								<th>SubCategory</th>
								<th>Category</th>
								<th>ProductID</th>
								<th>Date and Time Created</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody id="products-tbl">
							<?php 

								$all_products = pullNumberOfProduct();
								echo($all_products);

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