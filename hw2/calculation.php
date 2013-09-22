<?php
	if(!empty($_POST['birthday']) && !empty($_POST['name'])){
		$age = $_POST['birthday'];
		$name = $_POST['name'];
		$year = 2013-(int)substr($age,6,10);
		if($year < 1){
			echo 'Hi '.$name.', you are less than 1 year old.';
		}
		else{
			echo 'Hi '.$name.', you are now ' . $year . ' years old.';
		}
		
	}
	else{
		echo "Please Enter all information.";
	}
?>