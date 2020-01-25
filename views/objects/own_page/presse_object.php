<article>
        <div class="shadow p-2 mb-3 bg-white rounded">
            <a href="<?php echo $urlFichierPresse . $objPresse->getFichier() ?>" target="_blank"><?php echo $objPresse->getFichier(); ?></a>
            <?php
            if(isset($_SESSION['admin']) && $_SESSION['admin']) {
                adminOption('presse',$objPresse);
            } ?>
        </div>
</article>