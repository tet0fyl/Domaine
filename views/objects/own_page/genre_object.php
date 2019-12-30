<a class="card genre <?php echo($objGenre->getSelected())?'selected':' ';?>" href="<?php echo(!$objGenre->getSelected())?"evenement-genre-". $objGenre->getId():"evenement";?>">
    <?php echo $objGenre->getLibelle(); ?>
</a>
