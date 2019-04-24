<?php 

	// this will display the number of subcategories
	function pullNumberOfSubcategories($category_id){
		include('dbcon/dbcon.php');

		$sql = "SELECT COUNT(*)AS total 
				FROM subcategories 
				WHERE subcategories.category_id = '$category_id' ";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		$return_value = $row['total'];
		return $return_value; 
	}


	// this will display the list of subcategories
	function pullListOfSubcategories($category_id){
		include('dbcon/dbcon.php');

		$sql = "SELECT name, id 
				FROM subcategories
				WHERE category_id = '$category_id' ";
		$data = array();
		$result = mysqli_query($conn, $sql);
		$row_number = mysqli_num_rows($result);

		if ($row_number > 0) {
			while ($row = mysqli_fetch_array($result)) {
			    $data[] = $row;
			}

			$i = 0;

			foreach ($data as $key) {
				$row_number = $i + 1;
				$formatted_result = '';
				$formatted_result = '<tr>';
				$formatted_result .= '<td>'.$row_number.'</td>';
				$formatted_result .= '<td>'.$key[0].'</td>';
				$formatted_result .= '</tr>';
				$i++;
				echo $formatted_result;
			}
		} else {
			$formatted_result = ' No subcategories found ';
			echo $formatted_result;
			
		}
	}



	// this will display the number of products
	function pullNumberOfProducts($category_id){
		include('dbcon/dbcon.php');

		$sql = "SELECT COUNT(*) AS total 
				FROM products 
				WHERE category_id = '$category_id' ";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		$return_value = $row['total'];
		if ($return_value > 0) {
			return $return_value;
		} else {
			return 'No products found';
		}
		
	}

	function dateCreated($category_id){
		include('dbcon/dbcon.php');

		$sql = "SELECT created_at 
				FROM categories
				WHERE id = '$category_id' ";

		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$value = $row['created_at'];
		return $value;

		
	}


 ?>