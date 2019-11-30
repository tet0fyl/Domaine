<div>
    <a href="<?php echo(!$objGenre->getSelected())?"evenement-genre-". $objGenre->getId():"evenement";?>">
    <h3><?php echo $objGenre->getLibelle(); ?><span><?php echo($objGenre->getSelected())?"<--":" "; ?></span>
    </h3>

    </a>
</div>