<?php


class Database {
	private $pdo;


	private $host = 'localhost';
	private $dbName = 'blog';
	private $user = '****';
	private $password = '****';
	

	public function __construct(){
		


		try {
			$this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName;charset=UTF8", $this->user, $this->password);
		} catch (PDOException $e) {
			"Erreur de connection à la base de données" . $e->getMessage();
		}

		

	}

	public function getBdd(){
		return $this->pdo;
	}


	
	

}