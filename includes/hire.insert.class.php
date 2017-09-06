<?php
	class contactInsert{
		private $email,$workdef,$skillsreq;
		
		function __construct($email,$workdef,$skillsreq){
			$this->email = $name;
			$this->workdef = $workdef;
			$this->skillsreq = $skillsreq;
			
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
			$statement = $this->conn->prepare("INSERT INTO hire (email,workdef,skillsreq) VALUES (:email,:workdef,:skillsreq)");
			
			$statement->bindParam(':email',$this->email,PDO::PARAM_STR);
			$statement->bindParam(':workdef',$this->workdef,PDO::PARAM_STR);
			$statement->bindParam(':skillsreq',$this->skillsreq,PDO::PARAM_STR);
			
			if($statement->execute()){
				return true;
			}else{
				return false;
			}
		}
	}
?>