<!--<article>
     <h3><?php echo $objEvenement->getTitle(); ?></h3>
    <a href="evenement-<?php echo $objEvenement->getId(); ?>">
        <img alt="<?php echo $objEvenement->getTitle(); ?>"
             width="500" src="<?php echo $urlAfficheEvent . $objEvenement->getImg(); ?>">
    </a> -->
<article class="row">
    <div class="left">
        <div class="date">
        <span class="mois">
            <?php echo $objEvenement->getShortMonth(); ?>
        </span>
        <span class="jour">
            <?php echo $objEvenement->getDay(); ?>
        </span>
    </div>
    </div>
    <div class="right">
        <div class="evenement">
        <strong class="titre">
            <?php echo $objEvenement->getTitle(); ?>
        </strong>
        <span class="heure">
            <?php echo $objEvenement->getHourMin(); ?>
        </span>
    </div>
    </div>
</article>
