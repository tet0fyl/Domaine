<article class="d-flex flex-column">
    <?php
    if(isset($_SESSION['admin']) && $_SESSION['admin']) {
        adminOption('media',$objMedia);
    } ?>
            <a href="<?php echo $urlFichierMedia . $objMedia->getMedia() ?>">
                <img class="img-fluid" width="400px" src="<?php echo $urlFichierMedia . $objMedia->getMedia()?>">
            </a>
</article>