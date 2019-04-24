<?php 


	/**
	 * summary
	 */
	class CheckSession
	{
	    /**
	     * summary:: the function __construct() executes whenever the class is called
	     */
	   	
	    public function __construct()
	    {
	    	$this->displayAlert;
	    	

	    }

	    public function displayAlert($type , $text)
		{

			echo '<div class ="row"> <div  style="margin-top:240px; margin-bottom: -52px;"><div class="alert alert-'.$type.' alert-dismissable">
				<p>'.$text.'</p></div></div></div>';
		}


	}
	

 ?>