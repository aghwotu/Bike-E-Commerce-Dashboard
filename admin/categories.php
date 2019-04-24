<?php 

	// 	NOTE:: the session has already been started in the header file
	include('layout/header.php');
	include('show-category.php');

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
				echo '<br>';
			}
			unset($_SESSION['add-categ-error']);
		}
	}


	if (!isset($_SESSION['add-categ-success'])) {
		
	}else{
		if (count($_SESSION['add-categ-success']) > 0) {
			
			echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-info alert-dismissable">
									<p>'.$_SESSION['add-categ-success'][0].'</p>
								</div>
							</div>
					</div>';
			echo 	'<br>';
			echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-info alert-dismissable">
									<p><a href="create-subcategory.php">'.$_SESSION['add-categ-success'][1].'</a></p>
								</div>
							</div>
					</div>';
			unset($_SESSION['add-categ-success']);
		}
	}

			
 ?>



<div class="container-fluid">

	
	<!-- beginning of categories -->
	<!-- ###################### -->
<!-- <div class="row">
	<div class="alert alert-info fade in" style="margin-top: 120px;">This is an alert</div>
</div> -->
	<div class="row" id="categ-linker">
		<ul class="breadcrumb categ-crumb" >
		 	<li ><a href="index.php"><i class="icon ion-ios-home "></i>Dashboard</a></li>
		 	<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">Categories</li> 
		</ul>
	</div>
	<div class="row">
		<div class="panel categ-header" >
			<div class="panel-default">
				<ul class="ul-panel-header" >
					<li><i class="icon ion-ios-albums icon-categ pg-id-icon" id="icon-categ"></i>
					<li><label>Categories</label></li>
					<li>
						<a href="create-category.php" id="add-new-categ"  class="btn btn-success btn-add">
						<i class="icon ion-ios-plus-outline icon-add-new-categ"></i>
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
		<div class="panel panel-default panel-all-pages">
			<div class="panel-body">
				<!-- place well here for searching through the table -->
			<div class="table-responsive">
				<table class="table table-hover ">
					<thead>
						<tr>
							<th></th>
							<th>#</th>
							<th>Name</th>
							<th>Number of Sub_categories</th>
							<th>Number of Products</th>
							<th>Date and Time Created</th>
							<th>Actions</th>
							<!-- the actions that would be available to the 
								categories are VIEW, EDIT and DELETE -->

						</tr>
					</thead>
					<tbody id="categ-tbl">
						
						<?php 

							$allCategories = showCategory();
							echo($allCategories);

						 ?>

							<!-- <td><input type="checkbox" name=""></td>
							<td>1</td>
							<td>Andromeda</td>
							<td>12-05-2018</td>
							<td>3</td>
							<td>
								<button class="btn  btn-sm btn-view">
									<i class="icon ion-eye" ></i> 
									VIEW
								</button>
								<button class="btn btn-primary btn-sm btn-edit">
									<i class="icon ion-edit" ></i>
									EDIT
								</button>
								<button class="btn btn-danger btn-sm btn-delete">
									<i class="icon ion-trash-a" ></i>
									DELETE
								</button>
							</td> -->
						
						
					</tbody>
						
				</table>
			</div>
			</div>
		</div>
		
	</div>
	<!-- ######################## -->
	<!-- end of categories.php -->




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