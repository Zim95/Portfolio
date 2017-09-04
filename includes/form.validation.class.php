<?php
	class formValidation{
		public $name_pattern,$email_pattern,$message_pattern,$phone_pattern;
		
		function __construct(){
			$this->name_pattern = '/^(\S)+((.)+)?$/';
			$this->email_pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			$this->message_pattern = '/^(\S)+((.)+)?$/';
			$this->phone_pattern = '/^(\+\d{1,3})?(\-\s)?\d{10}$/';
		}
		
		function validate_name($name){
			if(!empty($name)){
				if(preg_match($this->name_pattern,$name)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		function validate_email($email){
			if(!empty($email)){	
				if(preg_match($this->email_pattern,$email)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		function validate_message($message){
			if(!empty($message)){
				if(preg_match($this->message_pattern,$message)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		function validate_phone($phone){
			if(!empty($phone)){
				if(preg_match($this->phone_pattern,$phone)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}
?>