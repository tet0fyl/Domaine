<article>
    <h3><?php echo $objEvenement->getTitle(); ?></h3>
    <a href="index.php?controller=evenement&action=single&id=<?php echo $objEvenement->getId(); ?>">
	<img alt="<?php echo $objEvenement->getTitle(); ?>"
		 width="500" src="<?php echo $urlAfficheEvent . $objEvenement->getImg(); ?>">
    </a>
</article>
