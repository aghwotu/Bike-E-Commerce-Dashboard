<?php 

	session_start();

	include('../dbcon/dbcon.php');

	$file = $_FILES['prodImageFile'];

	$error = array();
	$success = array();

	if (!empty($file)) {
		// echo 'Product submitted successfully';

		$categName = $_POST['categName'];
		$categId = $_POST['categId'];
		$subCategName = $_POST['subCategName'];
		$subCategId = $_POST['subCategId']; 
		$prodName = $_POST['prodName'];
		$prodPrice = $_POST['prodPrice'];
		$number_of_gears = $_POST['prodGears'];
		$brakeId = $_POST['brakeId'];
		$brakeName = $_POST['brakeName'];

		$date = '';
		$date = date("F d, Y h:i:sa");
		
		


		$fileName = $_FILES['prodImageFile']['name'];
		$fileTmpName = $_FILES['prodImageFile']['tmp_name'];
		$fileSize = $_FILES['prodImageFile']['size'];
		$fileError = $_FILES['prodImageFile']['error'];
		$fileType = $_FILES['prodImageFile']['type'];


		if (!empty($fileName)) {
			$explodedFileName = explode('.', $fileName);
			$fileExt = strtolower(end($explodedFileName));

			// ## an array to hold the approved file extensions
			$approvedExt = array('jpg' , 'jpeg' , 'png' , 'gif');

			// ## check if the file extension is in the array
			if (in_array($fileExt, $approvedExt)) {
				
				// ## check if an error occured
				if ($fileError === 0) {
					
					// ## check if file is greater than 2MB
					if ($fileSize <= 2000000) {
						
						$fileNewName = uniqid('' , true) . "." . $fileExt;
						$fileDestination = '../uploads/products/' . $fileNewName;


						// ## check if folder upload is successful
						if (move_uploaded_file($fileTmpName, $fileDestination)) {


							// ## we generate the productID here
							$time = gettimeofday();
							$GMToffset = $time['usec'];
							$prodIdPrefix = strtoupper(substr($categName, 0,3));
							$uniqidString = substr(md5(uniqid(rand())), 0,5);
							$prodId = $prodIdPrefix . "-" . $GMToffset;

							// echo $prodId;
							

							$filePermName = mysqli_real_escape_string($conn, $fileNewName);

							// echo $filePermName;


							// ## database upload
							$sql = "INSERT INTO 
									products(category_name, category_id, 
									subcategory_name, subcategory_id,
									product_id, name, price, 
									img_name, no_of_gears, 
									brake_id, brake_name, 
									created_at, updated_at)
									VALUES('{$categName}' , '{$categId}' , 
									'{$subCategName}', '{$subCategId}',
									'{$prodId}' , '{$prodName}', '{$prodPrice}' ,
									'{$filePermName}' , '{$number_of_gears}' ,
									'{$brakeId}' , '{$brakeName}' , 
									'{$date}' , '{$date}')";

							

							$result = mysqli_query($conn, $sql);
							if ($result) {
								// echo 'Product uploaded successful';
								$success[] = "Product uploaded successfully";
							} 
							

						} else {
							$error[] = "Error uploading product. Please try again later";
						}

					} else {
						$error[] = "File must be less than 2MB";
					}

				} else {
					$error[] = "Error uploading file. Please try again";
				}


			} else {
				$error[] = "Upload a valid image file";
			}
		}


	}

	else{
		$error[] = "Upload a product image";
	}
	
	$_SESSION['add-product-error'] = $error;
	$_SESSION['add-product-success'] = $success;
	

 ?>