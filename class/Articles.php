<?php
require_once 'autoload.php';

class Articles extends Tables{

	public static function getArticle($id){
		$db = App::makeBdd();
		
		$req = $db->prepare("SELECT * FROM articles WHERE id = :id");
		
		$req->bindValue(':id', $id);
		$req->setFetchMode(PDO::FETCH_CLASS, 'Articles');
		$req->execute();
		$article = $req->fetch();
		return $article;

	}

	public static function listArticlesByDate(){
		$db = App::makeBdd();
		
		$req = $db->prepare("SELECT * from articles ORDER BY date_article DESC");
		$req->execute();
		$articles = $req->fetchAll(PDO::FETCH_CLASS, 'Articles');
		
		return $articles;
	}

		public static function listArticlesByCategorie($categoriesId){
		$db = App::makeBdd();
		
		$req = $db->prepare("SELECT * from articles WHERE categories_id = :categories_id ORDER BY date_article DESC");
		$req->bindValue(':categories_id', $categoriesId);
		$req->execute();
		$articles = $req->fetchAll(PDO::FETCH_CLASS, 'Articles');
		
		return $articles;
	}


	public static function addArticle($titre, $auteurId, $contenu, $categories_id){
		$db = App::makeBdd();
		$date_article = date_create()->format('Y-m-d H:i:s');


		$req = $db->prepare("INSERT INTO articles (titre, auteur_id, contenu, date_article, categories_id) VALUES (:titre, :auteur_id, :contenu, :date_article, :categories_id)");
		$req->bindValue(':titre', $titre);
		$req->bindValue(':auteur_id', $auteurId);
		$req->bindValue(':contenu', $contenu);
		$req->bindValue(':date_article', $date_article);
		$req->bindValue(':categories_id', $categories_id);
		$req->execute();

	}

	public static function convertDate($date){
		$dateEtHeure = explode(" ", $date);

		$dates = $dateEtHeure[0];
		$heures = $dateEtHeure[1];

		$date = explode('-', $dates);

		$jour = $date[2];
		$mois = $date[1];
		$annee = $date[0];



		return $jour . '/' . $mois . '/' . $annee;
		
	}



}