<?php

class DatabaseConnect {

	private $mysql_host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'hardware.pl'; 

	private $pdo;

	public function __construct(){
		 try {
			 $this->pdo = new PDO('mysql:host='.$this->mysql_host.';dbname='.$this->database.';charset=utf8', $this->username, $this->password, [
				PDO::ATTR_EMULATE_PREPARES => false, 
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			]);

		 }
		 catch(PDOException $e) {
			 echo $e->getMessage();
		 }
	}

	 
	public function getPDO(){
		return $this->pdo;
 	}
}

?>