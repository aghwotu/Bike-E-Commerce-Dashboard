<?php 

	session_start();

	include('../dbcon/dbcon.php');

	$error = array();
	$success = array();

	$brake_type = rtrim(ltrim($_POST['braketype']));
	$date = date("F d, Y h:i:sa");

	// echo $brake_type;
	// exit();

	if (!empty($brake_type)) {
		// ## check if $brake_type already exists
		$checker = "SELECT name 
					FROM brakes
					WHERE name = '$brake_type' ";
		$results = mysqli_query($conn, $checker);
		$row_number = mysqli_num_rows($results);
		if ($row_number > 0) {
			$error[] = "Brake Type already exists";
			$_SESSION['add-brake-error'] = $error;
			exit();
		}

		$sql = "INSERT INTO brakes(name, created_at, updated_at)
				VALUES(?, ?, ?)";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('sss' , $brake_type, $date, $date );
		$stmt->execute();
		$stmt->close();

		$success[] = "BrakeType created successfully";
		$_SESSION['add-brake-success'] = $success;

	}else {
		$error[] = "All fields must be completed";
		$_SESSION['add-brake-error'] = $error;
		exit();
	}

 ?>