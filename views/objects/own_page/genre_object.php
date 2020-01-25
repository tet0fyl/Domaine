<a style="width: 100px" class="text-center shadow rounded p-2 genre <?php echo($objGenre->getSelected())?'genreSelected':' ';?>" href="<?php echo(!$objGenre->getSelected())?"evenement-genre-". $objGenre->getId():"evenement";?>">
    <?php echo $objGenre->getLibelle(); ?>
</a>
