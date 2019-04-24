<?php 

	function showSubCategory(){

		include('dbcon/dbcon.php');

		$sql = "SELECT id, name, created_at, updated_at
				FROM subcategories";
		$execute_sql = mysqli_query($conn , $sql);
		$number_of_rows = mysqli_num_rows($execute_sql);

		// the following will execute if subcategories exist
		if ($number_of_rows > 0) {
			$sql = "SELECT a.name, a.category_name, a.created_at , a.id, COUNT(b.name) 
					FROM subcategories a 
					LEFT OUTER JOIN products b 
					ON a.id = b.subcategory_id GROUP BY a.name";

			$execute_sql = mysqli_query($conn, $sql);
			$data = array();

			while ($row = mysqli_fetch_array($execute_sql)) {
			    $data[] = $row;
			}

			$i = 0;

			// $key[0] = name of subcategory
			// $key[1] = name of category
			// $key[2] = date and time created 
			// $key[3] = id of subcategory
			// $key[4] = number of products

			foreach ($data as $key) {
				$row_number = $i + 1;
				$formatted_result = '';
				$formatted_result = '<tr>';
				$formatted_result .= '<td> <input type= "checkbox" name= "'.$key[3].'"/> </td>';
				$formatted_result .= '<td>'.$row_number.'</td>';
				$formatted_result .= '<td>'.$key[0].'</td>'; // subcategory name
				$formatted_result .= '<td>'.$key[4].'</td>'; // number of products
				$formatted_result .= '<td>'.$key[1].'</td>'; // category name
				$formatted_result .= '<td>'.$key[2].'</td>'; // date and time created
				$formatted_result .= '<td>';
				$formatted_result .= '<a href="view-subcategory.php?name='.ltrim(rtrim(strtolower($key[0]))).'&id='.$key[3].' " class="btn btn-sm btn-view btn-action" >
										  	<i class="icon ion-eye" ></i> VIEW
									  </a>';
				$formatted_result .= '<a href="#" class="btn btn-primary btn-sm btn-edit btn-action">
											<i class="icon ion-edit" ></i> EDIT
									  </a>';
			    $formatted_result .= '<a href="#" class="btn btn-danger btn-sm btn-delete btn-action">
											<i class="icon ion-trash-a" ></i> DELETE
									  </a>';
				$formatted_result .= '</td>';
				$formatted_result .= '</tr>';
				$i++;
				echo($formatted_result);
			}
		} else {
			echo 'No subcatgories found';
		}

	}


 ?>