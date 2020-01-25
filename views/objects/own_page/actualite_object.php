<article class="shadow p-3 mb-5 bg-white rounded">
    <a href="actualite-<?php echo $objActualite->getId(); ?>">
        <h3><?php echo $objActualite->getTitle(); ?></h3>
        <?php
        if(isset($_SESSION['admin']) && $_SESSION['admin']) {
            adminOption('actualite',$objActualite);
        } ?>
        <div class="d-flex">
        <img class="img-fluid" width='400px' alt="<?php echo $objActualite->getTitle(); ?>"
             width="500" src="<?php echo $urlAfficheActu . $objActualite->getImg(); ?>">
        <p class="col-6"><?php echo $objActualite->getContent(200)?></p>
        </div>
    </a>
</article>