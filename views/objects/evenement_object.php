<article>
	<img alt="<?php echo $objEvenement->getTitle(); ?>" 
		 width="500" src="./asset/images/event/<?php echo $objEvenement->getImg(); ?>">
	<div>
		<h3><?php echo $objEvenement->getTitle(); ?></h3>
		<p><?php echo $objEvenement->getDate() ?></p>
		<p class="content"><?php echo $objEvenement->getContent(); ?></p>
	</div>
</article>
