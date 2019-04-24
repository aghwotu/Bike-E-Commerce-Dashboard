<?php  
	function showCategory(){
		// session_start();

		include('dbcon/dbcon.php');

		$sql = "SELECT id, name , created_at, updated_at 
				FROM categories";
		$result_of_check = mysqli_query($conn, $sql);
		$data = array();
		$row_number = mysqli_num_rows($result_of_check);
		// the if statement will execute if categories exist
		if ($row_number > 0) {

			// here we use a and b to represent categories and subcategories respectively
			$sql_select = "SELECT a.name, a.created_at , a.id, COUNT(b.name) 
						   FROM categories a 
						   LEFT OUTER JOIN subcategories b 
						   ON a.id = b.category_id 
						   GROUP BY a.name";

			$results = mysqli_query($conn, $sql_select);
			while ($row = mysqli_fetch_array($results)) {
			    $data[] = $row;
			}
			
			//  $key[0] = a.name => category name
			//  $key[1] = a.created_at => date created of category
			//  $key[2] = a.id => id of category
			//  $key[3] = COUNT(b.name) => the number of subcatgories of that category


			$i = 0;
			foreach ($data as $key) {
				$row_number = $i + 1;
				$formatted_result = '';
				$formatted_result = '<tr>';
				$formatted_result .= '<td> <input type= "checkbox" name= "'.$key[0].'"/> </td>';
				$formatted_result .= '<td> '.$row_number.' </td>';
				$formatted_result .= '<td>'.ltrim(rtrim($key[0]))  .' </td>';
				$formatted_result .= '<td>'. $key[3]. '</td>';
				$formatted_result .= '<td> Hello World </td>';
				$formatted_result .= '<td>'. $key[1] .'</td>' ;
				$formatted_result .= '<td>';
				$formatted_result .= '<a href="view-category.php?name='.ltrim(rtrim(strtolower($key[0]))).'&id='.ltrim(rtrim($key[2])).'" class="btn btn-sm btn-view btn-action" >
										  	<i class="icon ion-eye" ></i> VIEW
									  </a>';
				$formatted_result .= '<a href="edit-category.php?categ_name='.ltrim(rtrim($key[0])).'" class="btn btn-primary btn-sm btn-edit btn-action">
											<i class="icon ion-edit" ></i> EDIT
									  </a>';
			    $formatted_result .= '<a href="" class="btn btn-danger btn-sm btn-delete btn-action">
											<i class="icon ion-trash-a" ></i> DELETE
									  </a>';
				$formatted_result .= '</td>';
				$formatted_result .= '</tr>';					  
				$i++;

				// echo $formatted_result;
				echo  ($formatted_result);
			}
		} else {
			echo 'No categories to display';
			// echo ($formatted_result);
		}
	}

	
	

	


 ?>