<?php 

	include('dbcon/dbcon.php');

	$sql = "SELECT id, name
			FROM brakes";

	echo "<option value=''>--------</option>";

	$results = mysqli_query($conn, $sql);
	foreach ($results as $result) {
		echo "<option value='{$result['id']}'>  {$result['name']} </option>";
	}

 ?>