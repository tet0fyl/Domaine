<article>
    <?php
    if(isset($_SESSION['admin']) && $_SESSION['admin']) {
        adminOption('media',$objMedia);
    } ?>
            <a href="<?php echo $urlFichierMedia . $objMedia->getMedia() ?>">
                <img src="<?php echo $urlFichierMedia . $objMedia->getMedia()?>">
            </a>
</article>