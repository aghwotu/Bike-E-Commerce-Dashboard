<?php 
	include('layout/header.php');
 ?>

<div class="container-fluid">
	<ul class="breadcrumb create-categ-crumb" >
	 	<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
	 	<li><i class="icon ion-ios-arrow-forward ion-categ-forward"></i></li>
		<li><a href="categories.php">Categories</a></li> 
		<li><i class="icon ion-ios-arrow-forward ion-categ-forward"></i></li>
		<li class="active">Create</li>
	</ul>
	<div class="row">
		<div class="well well-sm" >
			<ul class="ul-categ-header">
				<li><i class="icon ion-ios-albums icon-add-categ"></i></li>
				<li><label class="">Add Category</label></li>
			</ul>
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