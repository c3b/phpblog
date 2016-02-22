<?php 
require_once 'autoload.php';

$titre= htmlentities($_POST['titre_article']);
$contenu = htmlentities($_POST['contenu_article']);
$categorie= htmlentities($_POST['categorie_article']);
$auteur = htmlentities($_POST['auteur']);

$auteurId = Users::getUserByPseudo($auteur)->id;

Articles::addArticle($titre, $auteurId, $contenu, $categorie);

header('Location:admin.php');



