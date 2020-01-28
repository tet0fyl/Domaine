<article>
        <div class="hoovshad shadow p-2 mb-3 bg-white rounded d-flex flex-column">
            <?php
            if(isset($_SESSION['admin']) && $_SESSION['admin']) {
                adminOption('presse',$objPresse);
            } ?>
            <a class="" href="<?php echo $urlFichierPresse . $objPresse->getFichier() ?>" target="_blank"><?php echo $objPresse->getFichier(); ?></a>
        </div>
</article>