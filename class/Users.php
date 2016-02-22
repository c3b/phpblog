<?php

require_once 'autoload.php';

class Users{

	public static function getUserByPseudo($pseudo){
		$db = App::makeBdd();

		$req = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
		$req->bindValue(':pseudo', $pseudo);
		$req->setFetchMode(PDO::FETCH_CLASS, 'Users');
		$req->execute();
		$user = $req->fetch();

		return $user;

	}

		public static function getUserById($userId){
		$db = App::makeBdd();

		$req = $db->prepare("SELECT * FROM users WHERE id = :user_id");
		$req->bindValue(':user_id', $userId);
		$req->setFetchMode(PDO::FETCH_CLASS, 'Users');
		$req->execute();
		$user = $req->fetch();

		return $user;

	}
}