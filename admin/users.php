<?php 
	include('layout/header.php');
 ?>

<div class="container-fluid">
	<div class="row" >
		<ul class="breadcrumb users-crumb" >
		 	<li ><a href="index.php"><i class="icon ion-ios-home "></i>Dashboard</a></li>
		 	<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">Users</li> 
		</ul>
	</div>
	<div class="row">
		<div class="panel add-users-panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li><i class="icon ion-person pg-id-icon li-icon-person"></i></li>
					<li><label>Users</label></li>
					<li>
						<a href="create-user.php" id="" class="btn btn-success btn-add">
							<i class="icon ion-ios-plus-outline icon-add-new-user"></i>
							Add new
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
		<div class="panel">
			<div class="panel-default panel-all-pages">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Email</th>
									<th>Date and Time Created</th>
									<th>Profile Picture</th>
									<th>Role</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>2</td>
									<td>1</td>
									<td>2</td>
									<td>1</td>
									<td>2</td>
									<td>1</td>
								</tr>
							</tbody>
						</table>
					</div>
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