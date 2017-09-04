<?php
	class contactInsert{
		private $name,$email,$message,$conn;
		
		function __construct($name,$email,$message){
			$this->name = $name;
			$this->email = $email;
			$this->message = $message;
			
			try {
				$this->conn = new PDO("mysql:host=localhost;dbname=portfolio;charset=utf8", "root", "");
				// set the PDO error mode to exception
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				//echo "Connected successfully"; 
			}
			catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
			} 
		} 
		
		function insert(){
			$statement = $this->conn->prepare("INSERT INTO contact (name,email,message) VALUES (:name,:email,:message)");
			
			$statement->bindParam(':name',$this->name,PDO::PARAM_STR);
			$statement->bindParam(':email',$this->email,PDO::PARAM_STR);
			$statement->bindParam(':message',$this->message,PDO::PARAM_STR);
			
			if($statement->execute()){
				return true;
			}else{
				return false;
			}
		}
	}
?>