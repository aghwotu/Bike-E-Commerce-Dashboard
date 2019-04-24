<?php 
	include('layout/header.php');
	include('pull-subcategandproduct-toview.php');

	$categ_name = $_GET['name'];
	$categ_id = $_GET['id'];
 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb view-categories-crumb ">
			<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
		 	<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li><a href="categories.php">Categories</a></li> 
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">view</li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active"><?php echo($categ_name); ?></li>
		</ul>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li><i class=" icon ion-ios-albums pg-id-icon"></i></li>
					<li><label> <?php echo($categ_name); ?></label></li>
					<li>
					<a href="#" class="btn btn-success btn-add">
						<i class="icon ion-edit"></i>
						Edit
					</a>
				</li>
				<li>
					<a href="categories.php" class="btn btn-danger btn-bulk-delete">
						<i class="icon ion-android-list"></i>
							Return to List
					</a>
					<!-- <button class="btn btn-danger btn-bulk-delete">
					<i class="icon ion-android-list"></i>
					Return to List
					</button>	 -->
				</li>
				</ul>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-default panel-all-pages">
			<div class="panel-bordered">
				<div class="panel-heading">
					<h3 class="panel-title" >name</h3>
				</div>
				<div class="panel-body">
					<p style="color: #76838f;"><?php  echo($categ_name); ?></p>
				</div>
			</div>
			<hr style="margin: 0;">
			<div class="panel-bordered">
				<div class="panel-heading">
					<h3 class="panel-title" >number of subcategories</h3>
				</div>
				<div class="panel-body">
					<p style="color: #76838f">
						<?php 
							$number_of_subcategs = pullNumberOfSubcategories($categ_id);
							echo($number_of_subcategs);
						?>
					</p>
				</div>
			</div>
			<hr style="margin: 0;">
			<div class="panel-group">
			    <div class="panel-bordered">
				    <div class="panel-heading" >
				        <h4 class="panel-title">
				            <a data-toggle="collapse" href="#collapse-subcateg" id="viewsubcateg">
				            	view subcategories <i class="icon ion-arrow-up-b"></i>
				            </a>
				        </h4>
				    </div>
				    <div id="collapse-subcateg" class="panel-collapse collapse">
				        <div class="panel-body" style="border-top: none;">
				        	<div class="table-responsive">
				        		<table class="table table-hover">
				        			<thead>
				        				<tr>
				        					<th>#</th>
				        					<th>Name</th>
				        				</tr>
				        			</thead>
				        			<tbody>
				        				<?php 
				        					$list_of_subcategs = pullListOfSubcategories($categ_id);
				        					echo($list_of_subcategs);

				        				 ?>
				        				
				        			</tbody>
				        		</table>
				        	</div>
				        </div>
				    </div>
			    </div>
			</div>
			<hr style="margin: 0;">
			<div class="panel-bordered">
				<div class="panel-heading">
					<h3 class="panel-title" >number of products</h3>
				</div>
				<div class="panel-body">
					<p style="color: #76838f;">
						<?php 

							$number_of_products = pullNumberOfProducts($categ_id);
							echo($number_of_products);
						 ?>
					</p>
				</div>
			</div>
			<hr style="margin: 0;">
			<div class="panel-bordered">
				<div class="panel-heading">
					<h3 class="panel-title" >date created</h3>
				</div>
				<div class="panel-body">
					<p style="color: #76838f;">
						<?php 

							$date = dateCreated($categ_id);
							echo($date);

						 ?>
					</p>
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
		// here we handle the changing icons
		$('#viewsubcateg').click(function(){
			if ($('#viewsubcateg > i').hasClass("ion-arrow-up-b")) {
				$('#viewsubcateg > i').attr("class" , "icon ion-arrow-down-b");
			}else{
				$('#viewsubcateg > i').attr("class" , "icon ion-arrow-up-b");
			};
		});
	});
</script>

<?php  
	include('layout/footer-two.php');
?>