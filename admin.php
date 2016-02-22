<?php
session_start();
require_once 'autoload.php';

if (isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['password']) && !empty($_POST['password'])){
	$_SESSION['pseudo'] = $_POST['pseudo'];
	$_SESSION['password'] = $_POST['password'];
}



$pseudoIn = htmlentities($_SESSION['pseudo']);
$passwordIn = htmlentities($_SESSION['password']);


$passwodDb = Users::getUserByPseudo($pseudoIn)->password;
?>



	<!-- ajout d'un article -->

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet"
	 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Admin</title>
</head>
<body>
<div class="container">
		



	<?php if ( $passwordIn == $passwodDb): ?>
		
		<div class="row">
			<div class="col-md-12 text-center">
				Bienvenu dans l 'admin: <?php echo $pseudoIn; ?>

			</div>
				
		</div>
		
	<div class="row">
		<div class="col-md-4">
			<h3 class="bg-danger text-center"> Ajouter un nouvel article</h3>
			<form role="form" method="post" action="addarticle.php">
			<div class="form-group">
			<label for="titre_article">Titre</label>
			<input class="form-control" type="text" name="titre_article"></input>
			<label for="contenu_article">Contenu</label>
			<textarea class="form-control" name="contenu_article" rows="8" cols="50"></textarea>
			<label for="categorie_article">Categorie</label>
			<select class="form-control" name="categorie_article">
				<?php foreach (Tables::listAll('categories') as $categorie):?>


				<option value="<?= $categorie->id ?>"><?= $categorie->titre ?></option>
				

				<?php endforeach; ?>
			</select>
			<input type="hidden" name="auteur" value="<?= $pseudoIn ?>"></input>
			</div>

			<div class="form-group">
			<button type="sumbit" class="btn btn-danger">Ajouter article</button>
			</div>
			</form>


	<?php else: ?>
		Mauvais mot de passe ou pseudo
		
	<?php endif; ?>
		</div>
	</div>

</div>
</body>
</html>
	
	



