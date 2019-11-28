<article>
	<img alt="<?php echo $objEvenement->getTitle(); ?>"
		 width="500" src="<?php echo $urlAfficheEvent . $objEvenement->getImg(); ?>">
	<div>
		<h3><?php echo $objEvenement->getTitle(); ?></h3>
		<p><?php echo $objEvenement->getDate() ?></p>
		<p class="content"><?php echo $objEvenement->getContent(); ?></p>
        <p>Genre : <?php echo $objEvenement->getListGenreLibelle(); ?></p>
	</div>
</article>

