<?php 
session_start();
require_once 'autoload.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html" />
    <link rel="stylesheet"
	 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


	<title>Blog</title>

	
	 
</head>
	<body>
		<div class="container">

			<div class="row">
				
					<div class="col-md-8">
						<h2 class="text-center">Test blog php objet</h2>
					</div>
					<div class="col-md-4">
						


							  <form role="form" method="post" action="admin.php">
								  <div class="form-group">
								  	<label for="pseudo">Pseudo</label>
								  	<input class="form-control" type="text" name="pseudo"></input>
								  	<label for="password">Mot de passe</label>
								  	<input class="form-control" type="password" name="password"></input>
								  	
								  </div>
								  <div class="form-group">
								  	<button type="submit" class="btn btn-danger">Admin</button>
								  </div>
							  </form>
					   
					</div>

				
			</div>

			<div class="row">
				
				<div class="col-md-8">
					<?php 
					if (isset($_GET['article'])){
						include('vues/article.php');
					} elseif (isset($_GET['categorie_article'])) {

						include('vues/categories_articles.php');
					} else {
						include('vues/articles.php');

					} ?>
				</div>

				<div class="col-md-4">
					<div class="row">
						<?php include ('vues/categories.php'); ?>
						<?php  ?>

					</div>
					<div class="row">
						<?php //autre menu ?>
					</div>
				</div>		
			
			</div>

		</div>
</body>
</html>