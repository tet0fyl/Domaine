<a href="evenement-<?php echo $objEvenement->getId(); ?>">
<article class="d-flex txt-b my-3 calendrierTile">
    <div class="d-flex flex-column text-center font-weight-bold mx-2">
        <span>
            <?php echo $objEvenement->getShortMonth(); ?>
        </span>
        <span class="txt-r">
            <?php echo $objEvenement->getDay(); ?>
        </span>
    </div>
    <div class="d-flex flex-column mx-2">
        <span class="font-weight-bold">
            <?php echo $objEvenement->getTitle(); ?>
        </span>
        <span class="heure">
            <?php echo $objEvenement->getHourMin(); ?>
        </span>
    </span>
    </div>
</article>
</a>