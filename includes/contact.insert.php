<?php
	require('contact.insert.class.php');
	
	//ci stands for contact insert
	$name = $_POST['name'];
	$email =$_POST['email'];
	$message =$_POST['message'];
	
	$ci_obj = new contactInsert($name,$email,$message);
	
	if($ci_obj->insert()){
		echo 'success';
	}else{
		echo 'problem';
	}
?>