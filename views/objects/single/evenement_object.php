<article class="d-flex flex-column">
    <?php
        if(isset($_SESSION['admin']) && $_SESSION['admin']) {
            adminOption('evenement',$objEvenement);
        } ?>
    <h3><?php echo $objEvenement->getTitle(); ?></h3>
    <img class="align-self-center" alt="<?php echo $objEvenement->getTitle(); ?>"
		 width="500" src="<?php echo $urlAfficheEvent . $objEvenement->getImg(); ?>">
	<div>
        <p class="mt-2"><span class="font-weight-bold">Date :</span> <?php echo $objEvenement->getFrenchDate() ?></p>
        <p><span class="font-weight-bold">Heure :</span> <?php echo $objEvenement->getHourMin() ?></p>
        <p class="font-weight-bold">Description :</p>
		<p><?php echo $objEvenement->getContent(); ?></p>
        <p><span class="font-weight-bold">Genre :</span> <?php echo $objEvenement->getListGenreLibelle(); ?></p>
	</div>
</article>
