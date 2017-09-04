<?php
	require('contact.insert.class.php');
	
	//ci stands for contact insert
	$name = 'Namah';
	$email = 'shresthanamah@gmail.com';
	$message = 'Please work';
	
	$ci_obj = new contactInsert($name,$email,$message);
	
	if($ci_obj->insert()){
		echo 'success';
	}else{
		echo 'failure';
	}
?>