<?php
	//hire class
	require ('hire.form.class.php');
	
	$email = $_POST['email'];
	$workdef = $_POST['workdef'];
	$skillsreq = $_POST['skillsreq'];
	
	
	$hire_obj = new hireForm($email,$workdef,$skillsreq);
	
	$return_val = $hire_obj->validate();
	
	if($return_val == ERR_IN_PTRN_NAME){
		echo 'Invalid email pattern';
	}else if($return_val == ERR_IN_PTRN_MESSAGE){
		echo 'Invalid work definition pattern';
	}else if($return_val == ERR_IN_PTRN_EMAIL){
		echo 'Invalid skills required pattern';
	}else if($return_val == DB_FOUND){
		/*This means ajax will make a call to contact.insert.php to insert data*/
		echo 'Found';
	}else if($return_val == MAIL_SENT){
		/*This means first confirm code will be checked and if correct then ajax will call contact.insert.php*/
		echo $hire_obj->random_number;
	}else if($return_val == MAIL_NOT_SENT){
		echo 'You mail was not sent.';
	}

?>