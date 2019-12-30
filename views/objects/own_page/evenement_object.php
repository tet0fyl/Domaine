<a href="evenement-<?php echo $objEvenement->getId(); ?>">
    <article class="card">
        <div class="d-flex" style="justify-content: space-between">
        <h3><?php echo $objEvenement->getTitle(); ?></h3>
            <?php
            if(isset($_SESSION['admin']) && $_SESSION['admin']) {
            ?>
                <div class="d-flex admin-option" style="flex-direction: column; width:30px">
                    <p>...</p>
                            <div>
                                <div class="d-flex">
                                    <a title="modifier">&#x270E modifier</a>
                                </div>
                                <div class="d-flex">
                                    <a title="supprimer">&#x2718 supprimer</a>
                                </div>
                            </div>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex">
	    <img alt="<?php echo $objEvenement->getTitle(); ?>"
		 width="500" src="<?php echo $urlAfficheEvent . $objEvenement->getImg(); ?>">
        <p><?php echo $objEvenement->getShortContent(); ?></p>
        </div>
    </article>
</a>
