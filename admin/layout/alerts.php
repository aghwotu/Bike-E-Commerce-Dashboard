<?php 

	class Alert{

		// Method
		public function displayAlert($text , $type)
		{
			// echo "<div class='alert alert-' ".$type. " role= 'alert' > <p>".$text."</p>" . ." </div>";
			echo '<div class ="row"> <div  style="margin-top:40px; margin-bottom: -52px;"><div class="alert alert-'.$type.' alert-dismissable">
				<p>'.$text.'</p></div></div></div>';
		}
	}

 ?>