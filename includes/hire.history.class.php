<?php
	class hireHistory{
		private $conn,$statement;
		
		function __construct(){
			try {
				$this->conn = new PDO("mysql:host=localhost;dbname=portfolio;charset=utf8", "root", "");
				// set the PDO error mode to exception
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
			}
			catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
			}
			
			$this->statement = $this->conn->prepare("SELECT * FROM hire");
			$this->statement->execute();
		}
		
		function hirecount(){
			$count=0;
			while($row = $this->statement->fetch()){
				$count = $count+1;
			}
			echo $count;
		}		
		
		function hirehist(){
			while($row = $this->statement->fetch()){
				$mail= $row['email'];
				$work= $row['work'];
				$skill=$row['skills'];
				echo "<tr><td>$mail</td><td>$work</td><td>$skill</td></tr>";
			}
		}
	}
?>