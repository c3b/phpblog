<?php
require_once 'autoload.php';

class Categories extends Tables{

		public static function getCategorie($idArticle){
		$db = App::makeBdd();
		
		$req = $db->prepare("SELECT categories.titre as titre from articles 
			LEFT JOIN categories ON articles.categories_id = categories.id
			WHERE articles.id = :idarticle");

		$req->bindParam(':idarticle', $idArticle);
		$req->setFetchMode(PDO::FETCH_CLASS, 'Articles');
		$req->execute();
		$catTitre = $req->fetch();
		
		return $catTitre;
	}

}