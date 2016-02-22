<?php 
//require_once 'autoload.php';


$id = htmlentities($_GET['article']);



$article = Articles::getArticle($id); ?>


<h3><?= $article->titre ?></h3> <a href="index.php">retour</a>	
<p><?= 'posté le ' . Articles::convertDate($article->date_article); ?>
<p><?= $article->contenu ?></p>