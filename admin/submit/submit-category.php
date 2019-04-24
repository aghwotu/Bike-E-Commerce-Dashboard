<?php 

	session_start();

	//## including our database connection
	include('../dbcon/dbcon.php');

	//## creating an error array to hold 'success' or 'error' messages
	$error = array();
	$success = array(); 
	

	//## passing our new category from the form into a new variable - $newcateg
	$newcateg = '';
	$newcateg = rtrim(ltrim($_POST['newcateg']));
	// $newcateg = $_POST['newcateg'];

	
	// exit();

	//## getting the data and time as at when the category is created
	$date = '';
	$date = date("F d, Y h:i:sa");

	if (isset($newcateg)) {
		
		//## checking if the value is empty
		if (empty($newcateg) ) {
			// ## creating an error and location SESSION
			// $location = '../categories-subcategories.php#categ-linker';
			$error[] = "Please enter a valid category";
			$_SESSION['add-categ-error'] = $error;
			if (isset($_SESSION['add-categ-error'])) {
				echo '';
			}
			

		}else{


			// ## we first check if such a category ALREADY EXISTS in the database
			$checker = "SELECT name 
						FROM categories
						WHERE name = '$newcateg'";

			$result = mysqli_query($conn, $checker);
			$row_number = mysqli_num_rows($result);
			if ($row_number > 0) {
				$error[] = "Category already exists";
				$_SESSION['add-categ-error'] = $error;
				exit();
			}
			

			//## passing the catgory into the database using 'MYSQLi prepared statements'
			//## '$stmt' represents the prepared statement
			//## '$conn' is from the database connection file 'dbcon.php'
			$sql = "INSERT INTO categories (name, created_at, updated_at)
				    VALUES(?, ?, ?)";
			$stmt = $conn->prepare($sql);


			//## here 'sss' represents the data-type of the variables which are all strings
			$stmt->bind_param('sss' , $newcateg , $date, $date);
			$stmt->execute();
			$stmt->close();

			$success[]  = "Category created successfully";
			$success[] = "Add SubCategory now";
			$_SESSION['add-categ-success'] = $success;

			// $ckcsession = new CheckSession( $_SESSION['success'] );
			if (isset($_SESSION['add-categ-success'])) {
				// header("Location: $location");
				echo '';
				
			}
			
			
		}
	}






	



 ?>