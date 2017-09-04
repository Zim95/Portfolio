<?php
	
	//contact class
	require ('contact.form.class.php');
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	
	$contact_obj = new contactForm($name,$email,$message);
	
	$return_val = $contact_obj->validate();
	
	if($return_val == ERR_IN_PTRN_NAME){
		echo 'Invalid name pattern';
	}else if($return_val == ERR_IN_PTRN_MESSAGE){
		echo 'Invalid message pattern';
	}else if($return_val == ERR_IN_PTRN_EMAIL){
		echo 'Invalid mail pattern';
	}else if($return_val == DB_FOUND){
		/*This means ajax will make a call to contact.insert.php to insert data*/
		echo 'Found';
	}else if($return_val == MAIL_SENT){
		/*This means first confirm code will be checked and if correct then ajax will call contact.insert.php*/
		echo $contact_obj->random_number;
	}else if($return_val == MAIL_NOT_SENT){
		echo 'You mail was not sent.';
	}
	
?>