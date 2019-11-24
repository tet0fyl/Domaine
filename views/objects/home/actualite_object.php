<article>
    <h3><?php echo $objActualite->getTitle(); ?></h3>
    <a href="index.php?controller=actualite&action=single&id=<?php echo $objActualite->getId(); ?>">
        <img alt="<?php echo $objActualite->getTitle(); ?>"
             width="500" src="<?php echo $urlAfficheActu . $objActualite->getImg(); ?>">
    </a>
</article>