<article class="p-1">
    <h4><?php echo $objActualite->getTitle(40); ?></h4>
    <a href="actualite-<?php echo $objActualite->getId(); ?>">
        <img alt="<?php echo $objActualite->getTitle(); ?>"
             width="500" src="<?php echo $urlAfficheActu . $objActualite->getImg(); ?>">
    </a>
</article>

