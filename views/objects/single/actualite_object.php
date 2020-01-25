<article class="d-flex flex-column">
    <?php
    if(isset($_SESSION['admin']) && $_SESSION['admin']) {
        adminOption('actualite',$objActualite);
    } ?>
    <h3><?php echo $objActualite->getTitle(); ?></h3>
    <img class="align-self-center" alt="<?php echo $objActualite->getTitle(); ?>"
         width="500" src="<?php echo $urlAfficheActu . $objActualite->getImg(); ?>">
    <div>
        <p><?php echo $objActualite->getContent(); ?></p>
    </div>
</article>