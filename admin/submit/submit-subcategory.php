<?php 
	
	session_start();

	$error = array();
	$success = array();

	include('../dbcon/dbcon.php');

	$categID = '';
	$categName = '';
	$subCategName = '';

	$categID = $_POST['categID'];
	$categName = $_POST['categName'];
	$subCategName = rtrim(ltrim($_POST['subCategName']));

	// ## getting the date when the subCategory is created
	$date = '';
	$date = date("F d , Y h:i:sa");

	
	if (empty($categID) || empty($categName) || empty($subCategName)) {
		$error[] = "All fields must be completed";
		$_SESSION['add-subcateg-error'] = $error;
		if (isset($_SESSION['add-subcateg-error'])) {
			echo '';
		}
		exit();
	}else {

		// ## we first check if the subcategory ALREADY EXISTS
		$checker = "SELECT name, category_id
					FROM subcategories
					WHERE name = '$subCategName' AND category_name = '$categName' ";
		$result = mysqli_query($conn, $checker);
		$row_number = mysqli_num_rows($result);
		if ($row_number > 0) {
			$error[] = "Subcategory already exists";
			$_SESSION['add-subcateg-error'] = $error;
			exit();
		}


		
		// ## inserting our values using MYSQLi prepared statements
		$sql = "INSERT INTO subcategories(category_id, category_name, name, created_at, 		updated_at)
				VALUES(?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($sql); 

		$stmt->bind_param('sssss' , $categID, $categName, $subCategName, $date, $date);
		$stmt->execute();
		$stmt->close();

		$success[] = "SubCategory created successfully";
		$success[] = "Add Products now";
		$_SESSION['add-subcateg-success'] = $success;

		if (isset($_SESSION['add-subcateg-success'])) {
			echo '';
		}

	}

	mysqli_close($conn);
	


 ?>