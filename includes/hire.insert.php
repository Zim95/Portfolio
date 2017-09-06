<?php
	require('hire.insert.class.php');
	
	//hi stands for hire insert
	$email =$_POST['email'];
	$workdef = $_POST['workdef'];
	$skillsreq =$_POST['skillsreq'];
	
	$hi_obj = new contactInsert($email,$workdef,$skillsreq);
	
	if($hi_obj->insert()){
		echo 'success';
	}else{
		echo 'problem';
	}
?>