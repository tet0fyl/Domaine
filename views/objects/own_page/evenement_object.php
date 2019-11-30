<article>
    <h3><?php echo $objEvenement->getTitle(); ?></h3>
    <a href="evenement-<?php echo $objEvenement->getId(); ?>">
	<img alt="<?php echo $objEvenement->getTitle(); ?>"
		 width="500" src="<?php echo $urlAfficheEvent . $objEvenement->getImg(); ?>">
    </a>
    <h1><?php echo($objEvenement->getPastEventStatus())?"passé":"prochainement"; ?></h1>
</article>
