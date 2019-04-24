$(document).ready(function(){

	// ## makes the success and error alerts disappear onclick()
	$('.alert').click(function() {
		$(this).remove();
	})


	// console.log("Hello World");
 
	// ## these functions are carried out on page load
	// ## places the category in the create-subcategory <select>
	getAllCategoryForSelectTag();
	getBrakeTypes();
	

	// ## this function checks if the input value contains dashes
	function checkEmptyOrDash(inputValue){
		if (inputValue == "") {
			return false;
		}
		else if(inputValue.search("---") != -1){
			return false;
		}
	}



	// ## create-category.php
	// Submit|Create the new category using the button_click event
	$btnCreateCategory = $('#new-categ-btn');
	$btnCreateCategory.click(function(){
		$newCateg = $('#new-categ').val();
		if ($newCateg.length == "") {
			// this will prevent the page from refreshing
			return false;

		}else{
			$.ajax({
				url: './submit/submit-category.php',
				data: {newcateg: $newCateg},
				type: 'post',
				success:function(data){
					window.location.assign("./categories.php");
					
					$('#pdemo').html(data);
					
				},
				error:function(error){
					alert(error);
				}
			});
		}
		
	});





	// ## create-subcategory.php
	// get the <select> value on change

	// Pass the categories to the <select> option of the create-subcategory page
	function getAllCategoryForSelectTag(){
		$.ajax({
			url: './get-category.php',
			type: 'post',
			data: {action:"all"},
			success: function(data){
				$subCategSelectTag = $('#sel-categ-in-subcateg');
				$productCategSelectTag = $('#sel-categ-in-product');
				$subCategSelectTag.html(data);
				$productCategSelectTag.html(data);
			},
			error: function(error){
				alert(error);
			}
		});
	}


	// ## acts as event listener for the create-subcategory <select> tag  
	var selectedCategIdInSubCateg = '';
	var selectedCategNameInSubCateg = '';
	$selectedCategInSubCateg = $('#sel-categ-in-subcateg');
	$selectedCategInSubCateg.change(function(){
		var $option = $(this).find('option:selected');
		selectedCategIdInSubCateg = $option.val();
		selectedCategNameInSubCateg = $option.text();
		// console.log(selectedCategNameInSubCateg + "<br>" + selectedCategIdInSubCateg);
	});


	$btnCreateSubCategory = $('#new-subcateg-btn');
	$btnCreateSubCategory.click(function(){
		// console.log("Hello World");
		$subCategName = $('#new-subcateg').val();
		if ($subCategName.length == "") {
			return false;
		}
		else if(checkEmptyOrDash(selectedCategNameInSubCateg) == false ){
			alert("All fields must be completed");
		}else{
			$.ajax({
				url: './submit/submit-subcategory.php',
				data: {categID:selectedCategIdInSubCateg, categName:selectedCategNameInSubCateg,
						subCategName:$subCategName},
				type: 'post',
				success: function(data){
					window.location.assign("./subcategories.php");

					$('#p-hidden').html(data);
				},
				error: function(error){
					alert(error);
				}
			});
		}
		
	});



	// ## create-braketype.php
	$btnCreateBrakeType = $('#new-braketype-btn');
	$btnCreateBrakeType.click(function(){
		$newBrakeType = $('#new-braketype').val();
		// alert($newBrakeType);
		if (checkEmptyOrDash($newBrakeType) != false) {
			$.ajax({
				url: './submit/submit-braketype.php',
				data: {braketype: $newBrakeType},
				type: 'post',
				success: function(data){
					window.location.assign("./braketypes.php");
					// $('#dmo').html(data);	
				},
				error: function(error){
					alert(error);
				}
			});
		}else{
			return false;
		}
		
	});





	// ## create-product.php

	// ## EventListener to check for the value when the category is changed
	var selectedCategIdInProduct = '';
	var selectedCategNameInProduct = '';
	$selectedCategInProduct = $('#sel-categ-in-product');
	$selectedCategInProduct.change(function(){
		var $option = $(this).find('option:selected');
		selectedCategIdInProduct = $option.val();
		selectedCategNameInProduct = $option.text();
		// alert(selectedCategIdInProduct);
		// console.log(selectedCategNameInProduct + " " + selectedCategIdInProduct);
		// console.log(selectedCategNameInProduct.length);


		// I can't figure out what is causing the spaces to appear before and after
		if (selectedCategNameInProduct !== " Bicycles ") {
			$('#gear-group').hide();
			$('#brake-group').hide();
		}else {
			// console.log('Hello World');
			$('#gear-group').show();
			$('#brake-group').show();
		}
		// ## changing the value of the subcategory based on the category selected
		$.ajax({
			url: './get-subcategory.php',
			data : {categName: selectedCategNameInProduct}, 
			type: 'post',
			success: function(data){
				$selectedSubCategInProduct = $('#sel-subcateg-in-product');
				$selectedSubCategInProduct.html(data);
			},
			error: function(error){
				alert(error);
			}
		});

	});


	// ## EventListener to check for the value when the subcategory is selected
	var selectedSubCategIdInProduct = '';
	var selectedSubCategNameInProduct = '';
	$selectedSubCategInProduct = $('#sel-subcateg-in-product');
	$selectedSubCategInProduct.change(function(){
		var $option = $(this).find('option:selected');
		selectedSubCategIdInProduct = $option.val();
		selectedSubCategNameInProduct = $option.text();
		// alert(selectedSubCategIdInProduct + " " + selectedSubCategNameInProduct);
	});


	// ## EventListener to check for the value when the brake_type is selected
	var selectedBrakeTypeIdInProduct = '';
	var selectedBrakeTypeNameInProduct = '';
	$selectedBrakeTypeInProduct = $('#sel-braketype-in-product');
	$selectedBrakeTypeInProduct.change(function(){
		var $option = $(this).find('option:selected');
		selectedBrakeTypeIdInProduct = $option.val();
		selectedBrakeTypeNameInProduct = $option.text();
		// alert("val() = " + $option.val() + " " + "text() = " + $option.text());
	});



	// ## this function makes the brakes from the db available to the <select> tag
	function getBrakeTypes(){
		$.ajax({
			url: './get-brake.php',
			type: 'post',
			success: function(data){
				$productBrakeSelectTag = $('#sel-braketype-in-product');
				$productBrakeSelectTag.html(data);
			},
			error: function(error){
				alert(error);
			}
		});
	}


	// ## FormData() to handle file upload via ajax
	var prod_form_data = new FormData();
	var prod_img_name = "";

	$(document).on('change' , '#imgpreview-input' , function(){
		var property = document.getElementById("imgpreview-input").files[0];
		prod_img_name = property.name;
		var prod_img_ext = prod_img_name.split(".").pop().toLowerCase();
		if (jQuery.inArray(prod_img_ext, ['gif', 'png' , 'jpg' , 'jpeg']) == -1) {
			var invalidFileMsg = "Please upload a valid image file";
			// place alertify message here
		}
		var prod_img_size = property.size;
		if (prod_img_size > 2000000) {
			var invalidSizeMsg = "Image size is too big";
			// place invalid_ message here
		}else{
			prod_form_data.append("prodImageFile" , property);
		}
	});


	// ## btn_Click event to create a new product
	$btnCreateProduct = $('#new-prod-btn');
	$btnCreateProduct.click(function(){

		// console.log("Hello World");

		$prodName = $('#prod-name').val();
		// $prodColor = $('#product-color-input').val();
		$prodPrice = $('#prod-price').val();
		$prodGears = $('#prod-gears-number').val();
		if ((selectedCategNameInProduct !== " Bicycles ")) {
			$prodGears = 0;
		}
		if ( (selectedCategNameInProduct !== " Bicycles ")) {
			selectedBrakeTypeNameInProduct = "none";
			selectedBrakeTypeIdInProduct = 0;
		}
		if ((checkEmptyOrDash(selectedCategIdInProduct)== false)
			||(checkEmptyOrDash(selectedCategNameInProduct) == false)
			||(checkEmptyOrDash(selectedSubCategIdInProduct)==false)
			||(checkEmptyOrDash(selectedSubCategNameInProduct)== false)
			||(checkEmptyOrDash($prodName)== false)
			||(checkEmptyOrDash($prodPrice)== false)) {
			$emptyErrorMsg = "All fields must be completed";
			alert($emptyErrorMsg);
		}else{

			prod_form_data.append("categName" , selectedCategNameInProduct);
			prod_form_data.append("categId" , selectedCategIdInProduct);
			prod_form_data.append("subCategName", selectedSubCategNameInProduct);
			prod_form_data.append("subCategId" , selectedSubCategIdInProduct);
			prod_form_data.append("prodName" , $prodName);
			// prod_form_data.append("prodColor" , $prodColor);
			prod_form_data.append("prodPrice" , $prodPrice);
			prod_form_data.append("prodGears" , $prodGears);
			prod_form_data.append("brakeId" , selectedBrakeTypeIdInProduct);
			prod_form_data.append("brakeName" , selectedBrakeTypeNameInProduct);


			$.ajax({
				url: './submit/submit-product.php',
				method: 'post',
				data: prod_form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function(data){
					window.location.assign("./products.php");
					// $('#dmp').html(data);
				},
				error: function(error){
					alert(error);
				}
			});


			
			

		}
	});


	// ## end of create-product.php


	// ## I'm now using a php file instead
	// ## display category in front page
	// showCategoriesInTbl();
	// function showCategoriesInTbl(){
	// 	$.ajax({
	// 		url: './show-category.php',
	// 		method: 'post',
	// 		contentType: false,
	// 		cache: false,
	// 		processData: false,
	// 		success: function(data){
	// 			$('#categ-tbl').html(data);
	// 		},
	// 		error: function(data){

	// 		}
	// 	});
	// }

	// ## end of display category in front page
	

	// ## view-category

	function viewCategory(){
		// simply get multiple functions to get the different parts of the category to display
		// we will use a switch statement for the different functions
		// and we will use the same file to bring out each part of the category being viewed
		// we will carry this out on a button click event where we pick the value from
		// the checkbox

		
	}

	// ## end of view-category


	// ## this retrieves the categories for the categories
	function getAllCategForCategTbl(){
		$.ajax({
			url: './display-category.php',
			data: '',
			
		});
	}





	
});