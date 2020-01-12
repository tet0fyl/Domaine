<!--<article>
     <h3><?php echo $objEvenement->getTitle(); ?></h3>
    <a href="evenement-<?php echo $objEvenement->getId(); ?>">
        <img alt="<?php echo $objEvenement->getTitle(); ?>"
             width="500" src="<?php echo $urlAfficheEvent . $objEvenement->getImg(); ?>">
    </a> -->
<article class="row">
    <div class="left">
        <p>
            <?php echo $objEvenement->getShortMonth(); ?>
        </p>
        <p>
            <?php echo $objEvenement->getDay(); ?>
        </p>
    </div>
    <div class="right">
        <p>
            <?php echo $objEvenement->getTitle(); ?>
        </p>
        <p>
            <?php echo $objEvenement->getHourMin(); ?>
        </p>
    </div>
</article>
