<article class="d-flex flex-column shadow rounded px-3 pb-2 mb-2">
    <?php
    if(isset($_SESSION['admin']) && $_SESSION['admin']) {
        adminOption('evenement',$objEvenement);
    } ?>
    <a href="evenement-<?php echo $objEvenement->getId(); ?>">

    <div class="d-flex flex-wrap">
    <div class="d-flex flex-column text-center font-weight-bold mx-2">
        <span>
            <?php echo $objEvenement->getShortMonth(); ?>
        </span>
        <span class="txt-r">
            <?php echo $objEvenement->getDay(); ?>
        </span>
    </div>
        <div class="d-flex">
        <h3><?php echo $objEvenement->getTitle(45); ?></h3>

        </div>
    </div>
    <div class="d-flex flex-wrap">
	    <img class="img-fluid" alt="<?php echo $objEvenement->getTitle(); ?>"
		 width="500" src="<?php echo $urlAfficheEvent . $objEvenement->getImg(); ?>">
        <p class="px-3 col-5"><?php echo $objEvenement->getShortContent(); ?></p>
    </div>
    </a>

</article>
