<?php 

	include('dbcon/dbcon.php');

	$categName = $_POST['categName'];

	$sql = "SELECT id, name
			FROM subcategories
			WHERE category_name = '$categName' 
			ORDER BY name ASC";


	echo "<option>-------</option>";
	$results = mysqli_query($conn, $sql);

	foreach ($results as $result) {
		echo "<option value='{$result['id']}'> {$result['name']} </option>";
	}

	mysqli_close($conn);

 ?>