<article>
	<img alt="<?php echo $objActualite->getTitle(); ?>" 
		 width="500" src="<?php echo $urlAfficheActu . $objActualite->getImg(); ?>">
	<div>
		<h3><?php echo $objActualite->getTitle(); ?></h3>
		<p><?php echo $objActualite->getDate() ?></p>
		<p class="content"><?php echo $objActualite->getContent(); ?></p>
	</div>
</article>