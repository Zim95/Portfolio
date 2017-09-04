<?php
	//add form validation library
	require ('form.validation.class.php');
	
	//phpmailer
	require_once('PHPMailer/PHPMailerAutoload.php');
	
	//error codes
	require ('error.codes.php');
	
	//create contact form class that inherits the basic form validations
	class hireForm extends formValidation{
		private $email,$workdef,$skillsreq,$mails,$conn;
		public $random_number,$subject;
		
		function __construct($email,$workdef,$skillsreq){
			parent::__construct();
			$this->email = $email;
			$this->workdef = $workdef;
			$this->skillsreq = $skillsreq;
			$this->random_number = rand(1000,9999);
			$this->subject = 'Confirmation Code';
			$this->mails = new PHPMailer();
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
		
		public function check_db_email($email){
			$count=0;
			$statement = $this->conn->prepare("SELECT * FROM hire WHERE email=:parameter");
			$statement->bindParam(':parameter',$email,PDO::PARAM_STR);
			$statement->execute();
			
			while($row = $statement->fetch()){
				$count = $count+1;
			}
			if($count>0){
				return true;
			}else{
				return false;
			}
		}
		public function phpmailer($email,$subject,$rand){
			$this->mails->IsSMTP();
			$this->mails->Mailer = "smtp";
			$this->mails->Host = "mail.smtp2go.com";
			$this->mails->Port = "587"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
			$this->mails->SMTPAuth = true;
			$this->mails->SMTPSecure = 'tls';
			$this->mails->Username = "shresthanamah@gmail.com";
			$this->mails->Password = "4fuT2pfs7QHR";

			$this->mails->From = "devworks95@gmail.com";	
			$this->mails->FromName = "Namah Shrestha";
			$this->mails->AddAddress($this->email, "Hirer");
			$this->mails->AddReplyTo("shresthanamah@gmail.com", "Sender's Name");

			$this->mails->Subject = "confirmation code";
			$this->mails->Body = 'Please enter the following conformation code to confirm email:'.$rand;
			$this->mails->WordWrap = 50; 

			if(!$this->mails->Send()) {
				return false;
			} else {
				return true;
			}
		}
		public function validate(){
			if(parent::validate_message($this->workdef)){
				if(parent::validate_message($this->skillsreq)){
					if(parent::validate_email($this->email)){
						if($this->check_db_email($this->email)){
							return DB_FOUND;
						}else{
							if($this->phpmailer($this->email,$this->subject,$this->random_number)){
								return MAIL_SENT;
							}else{
								return MAIL_NOT_SENT;
							}
						}
					}else{
						return ERR_IN_PTRN_EMAIL;
					}
				}else{
					return ERR_IN_PTRN_MESSAGE;
				}
			}else{
				return ERR_IN_PTRN_MESSAGE;
			}
		}
	}
	
?>