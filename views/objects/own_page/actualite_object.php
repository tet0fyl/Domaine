<article class="shadow p-3 mb-5 rounded d-flex flex-column">
    <?php
    if(isset($_SESSION['admin']) && $_SESSION['admin']) {
        adminOption('actualite',$objActualite);
    } ?>
    <a href="actualite-<?php echo $objActualite->getId(); ?>">
        <h3><?php echo $objActualite->getTitle(); ?></h3>
        <div class="d-flex">
        <img class="img-fluid col-2" alt="<?php echo $objActualite->getTitle(); ?>"
             width="500" src="<?php echo $urlAfficheActu . $objActualite->getImg(); ?>">
        <p class="col-6"><?php echo $objActualite->getContent(200)?></p>
        </div>
    </a>
</article>