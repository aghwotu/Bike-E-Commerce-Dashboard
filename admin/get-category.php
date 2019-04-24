<?php 
	session_start();
	include('dbcon/dbcon.php');

	// if (isset($_POST['action'])) {
	// 	echo $_POST['action'];
	// 	exit();
	// }

	$sql = "SELECT id, name
			FROM categories
			ORDER BY name ASC";
	echo "<option value=''>-------</option>";
	$results = mysqli_query($conn, $sql);
	foreach ($results as $result) {
		echo "<option value='{$result['id']}'> {$result['name']} </optiion>";
	}

	mysqli_close($conn);

 ?>