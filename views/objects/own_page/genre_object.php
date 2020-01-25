<a class="col-1 text-center shadow rounded p-2 genre <?php echo($objGenre->getSelected())?'genreSelected':' ';?>" href="<?php echo(!$objGenre->getSelected())?"evenement-genre-". $objGenre->getId():"evenement";?>">
    <?php echo $objGenre->getLibelle(); ?>
</a>
