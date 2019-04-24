<?php 

	function pullNumberOfProduct(){
		include('dbcon/dbcon.php');

		$sql = "SELECT id, name, category_name, subcategory_name, 
				img_name, product_id, brake_name, no_of_gears,
				created_at
				FROM products
				LIMIT 10";

		$execute_sql = mysqli_query($conn, $sql);

		$number_of_rows = mysqli_num_rows($execute_sql);

		if ($number_of_rows > 0) {
			$data = array();

			while ($row = mysqli_fetch_array($execute_sql)) {
			    $data[] = $row;
			}

			// $key[0] = id
			// $key[1] = product_name
			// $key[2] = category_name
			// $key[3] = subcategory_name 
			// $key[4] = image_name
			// $key[5] = product_id
			// $key[6] = brake_name
			// $key[7] = number_of_gears
			// $key[8] = created_at

			$i = 0;
			foreach($data as $key){
				$row_number = $i + 1;
				$formatted_result = '';
				$formatted_result = '<tr>';
				$formatted_result .= '<td><input type="checkbox" name="'.$key[0].'"/></td>'; //id
				$formatted_result .= '<td>'.$row_number.'</td>';
				$formatted_result .= '<td>'.$key[1].'</td>'; //product_name
				$formatted_result .= '<td>'.$key[4].'</td>';	//image_name
				$formatted_result .= '<td>'.$key[6].'</td>'; //brake_name
				$formatted_result .= '<td>'.$key[7].'</td>'; //number_of_gears
				$formatted_result .= '<td>'.$key[3].'</td>'; //subcategory_name
				$formatted_result .= '<td>'.$key[2].'</td>'; //category_name
				$formatted_result .= '<td>'.$key[5].'</td>'; //product_id
				$formatted_result .= '<td>'.$key[8].'</td>'; //created_at
				$formatted_result .= '<td> Hello World </td>';
				$formatted_result .= '</tr>';
				$i++;
				echo($formatted_result);
			}

		} else {
			echo 'No products found';
		}
		
	}

 ?>