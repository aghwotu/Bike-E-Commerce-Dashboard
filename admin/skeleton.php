<?php 
	include('layout/header.php');
 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb sub-categories-crumb">
			<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">PageName</li>
		</ul>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li><i class=" icon ion-android-train pg-id-icon"></i></li>
					<li><label>PageName</label></li>
					<li>
					<a href="#" class="btn btn-success btn-add">
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
				<p>Place page content here</p>
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