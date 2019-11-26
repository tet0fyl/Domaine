<div>
    <a href="<?php echo(!$objGenre->getSelected())?"index.php?controller=evenement&action=evenementByGenre&id=". $objGenre->getId():"index.php?controller=evenement&action=evenement";?>">
    <h3><?php echo $objGenre->getLibelle(); ?><span><?php echo($objGenre->getSelected())?"<--":" "; ?></span>
    </h3>

    </a>
</div>