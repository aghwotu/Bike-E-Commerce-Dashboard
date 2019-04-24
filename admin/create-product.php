<?php 
	include('layout/header.php');
 ?>

<div class="container-fluid">
	<div class="row">
		<ul class="breadcrumb create-product-crumb">
			<li><a href="index.php"><i class="icon ion-ios-home"></i>Dashboard</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li ><a href="products.php">Product</a></li>
			<li><i class="icon ion-ios-arrow-forward ion-crumb-forward"></i></li>
			<li class="active">Create</li>
		</ul>
	</div>
	<div class="row">
		<div class="panel">
			<div class="panel-default">
				<ul class="ul-panel-header">
					<li><i class=" icon ion-leaf pg-id-icon"></i></li>
					<li><label>Create Product</label></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-default panel-all-pages">
			<div class="panel-body">
				<form role="form">
					<div class="form-group">
						<label class="control-label custom-form-lbl">category</label>
						<select class="form-control custom-form-control custom-form-select" id="sel-categ-in-product">
							
						</select>
					</div>
					<div class="form-group">
						<label class="control-label custom-form-lbl">subcategory</label>
						<select class="form-control custom-form-control custom-form-select" id="sel-subcateg-in-product">
							
						</select>
					</div>
					<div class="form-group">
						<label class="control-label custom-form-lbl">name</label>
						<input type="" name="" class="form-control custom-form-control" id="prod-name">
					</div>
					<div class="form-group">
						<label class="control-label custom-form-lbl">upload product image</label>
						<input type="file"  onchange="imagepreview(this);" id="imgpreview-input"  required="" name="imgpreview-input" class="upload-input">
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="panel">
								<div class="panel-default">
									<div class="panel-body">
										<img id="product-preview"  class="img-responsive" >
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="form-group">
						<label class="control-label custom-form-lbl">color</label>
						<input type="color" name="" class="form-control custom-form-control" id="product-color-input">
					</div> -->
					<div class="form-group">
						<label class="control-label custom-form-lbl">price</label>
						<input type="text" name="" class="form-control custom-form-control" id="prod-price">
					</div>
					<div class="form-group" id="gear-group">
						<label class="control-label custom-form-lbl">number of gears</label>
						<input type="number" name="" class="form-control custom-form-control" id="prod-gears-number">
					</div>
					<div class="form-group" id="brake-group">
						<label class="control-label custom-form-lbl">brake type</label>
						<select class="form-control custom-form-control custom-form-select" id="sel-braketype-in-product">
							<!-- <option>------------</option>
							<option>aluminium</option>
							<option>rubber</option> -->
						</select>
					</div>
					<div class="form-group" >
						<div class="">
							<input type="button" name="" class="btn btn-primary btn-lg save-btn" value="SAVE" id="new-prod-btn">
						</div>
					</div>
				</form>
				<!-- <p id="dmp">Demo paragraph</p> -->
			</div>
		</div>
		
	</div>
</div>

<?php 
	include('layout/footer-one.php'); 
?>

<script type="text/javascript">
	function imagepreview(input){
		var $imgpreview = $('#product-preview');
        if (input.files && input.files[0]) {
            var filerd = new FileReader();
            filerd.onload = function (e) {
            	$imgpreview.attr("src" , e.target.result);
                // $('#imgpreview').attr("src" , e.target.result);
            };
            filerd.readAsDataURL(input.files[0]);
        }
}
</script>

<?php  
	include('layout/footer-two.php');
?>