<?php 
	include('layout/header.php');

	if (!isset($_SESSION['add-brake-error'])) {
		
	}else {
		if (count($_SESSION['add-brake-error']) > 0) {
			foreach ($_SESSION['add-brake-error'] as $err) {
				echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-danger alert-dismissable">
									<p>'.$err.'</p>
								</div>
							</div>
						</div>';
				echo '<br>';
			}
			unset($_SESSION['add-brake-error']);
		}
	}

	if (!isset($_SESSION['add-brake-success'])) {
		
	}else {
		if (count($_SESSION['add-brake-success']) > 0) {
			foreach ($_SESSION['add-brake-success'] as $success) {
				echo 	'<div class ="row"> 
							<div  style="margin-top:40px; margin-bottom: -52px;">
								<div class="alert alert-info alert-dismissable">
									<p>'.$success.'</p>
								</div>
							</div>
						</div>';
				echo '<br>';
			}
			unset($_SESSION['add-brake-success']);
		}
	}


 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb brake-crumb">
			<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">BrakeTypes</li>
		</ul>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li><i class=" icon ion-aperture pg-id-icon"></i></li>
					<li><label>BrakeTypes</label></li>
					<li>
					<a href="create-braketype.php" class="btn btn-success btn-add">
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
							<th></th>
							<th>#</th>
							<th>Name</th>
							<th>Date and Time Created</th>
							<th>Actions</th>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" name=""></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							
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