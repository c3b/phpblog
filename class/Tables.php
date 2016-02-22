<?php
require_once 'autoload.php';

class Tables{

	public static function listAll($table){
		$db = App::makeBdd();
		
		$req = $db->prepare("SELECT * from $table");
		$req->execute();
		$articles = $req->fetchAll(PDO::FETCH_CLASS, ucfirst($table));
		
		return $articles;
	}
}