<?php 

	// ## our database variables
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rawBiker";

	// Create new server connection using the mysqli() function
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ( $conn->connect_error ) {
		die("Connection Error:" . $mysqli->connect_error );
	}



 ?>