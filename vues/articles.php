

	<ul>
	<?php foreach (Articles::listArticlesByDate() as $article):?>
		<div class="row">
			<div class="fondarticle">
				<h3><a href="index.php?article=<?= $article->id ?>"><?php echo $article->titre ?></a></h3>
				<h4>catégorie: <b><?= Categories::getCategorie($article->id)->titre ?></b></h4>
				<h5><?php echo "posté par: <b>". Users::getUserById($article->auteur_id)->pseudo ?></b>
				le 


				<?php echo Articles::convertDate($article->date_article); ?>


				</h5>
				<?php echo substr($article->contenu, 0, 150) . '...'?>
				<a href="index.php?article=<?= $article->id ?>">Lire la suite</a>
			</div>
		</div>
	<?php endforeach; ?>

	</ul>
