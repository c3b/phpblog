<?php
require_once 'autoload.php'; ?>

<div class="menucat">
	<h3 class="text-center">Catégories<h3>
			<div class="monTexte">
				<h3><a href="index.php"><?php echo 'Toutes les catégories' ?></a></h3>
			</div>
	<?php foreach (Categories::listAll('categories') as $categorie):?>
			<div class="monTexte">
			<h3><a href="index.php?categorie_article=<?= $categorie->id ?>"><?php echo $categorie->titre ?></a></h3>
			</div>
	<?php endforeach; ?>
	
</div>