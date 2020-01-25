<form method="post" action="<?php echo (isset($objEvenement))?'admin-updateevenement-' . $objEvenement->getId():'admin-postevenement'; ?>" enctype="multipart/form-data">
    <div class = 'form-group'>
        <label for="titre">Titre : </label>
        <input class="form-control" type="text" id="titre" name="titre" value="<?php echo (isset($objEvenement))?$objEvenement->getTitle():''; ?>" required>
    </div>
    <?php if (isset($objEvenement)) { ?>
    <div class='form-check displayIfCheckBox'>
        <input  class="form-check-input" type="checkbox" id="changeAffiche" name="changeAffiche">
        <label  class="form-check-label" for="changeAffiche">Changer l'image : </label>
    </div>
    <?php } ?>
    <div class='custom-file displayIfCheckBox'>
        <label class="custom-file-label" for="affiche">Img : </label>
        <input class="custom-file-input" type="file" id="imgInp" name="affiche" <?php echo (isset($objEvenement))?'':'required'?>>
    </div>
    <div class="form-group mt-2">
        <img class="img-fluid shadow" width="200px" id='renderImg' src="#" alt="">
    </div>
    <div class = 'form-group'>
        <label for="date">Date : </label>
        <input class="form-control" type="date" id="date" name="date" value="<?php echo (isset($objEvenement))?$objEvenement->getYearsMonthDay():''; ?>" required>
    </div>
    <div class = 'form-group'>
        <label for="heure" id="heure">Heure : </label>
        <input class="form-control" type="time" id="heure" name="heure" value="<?php echo (isset($objEvenement))?$objEvenement->getHour():''; ?>" required>
    </div>
    <div class = 'form-group'>
        <label for="genre" id="genre">Genre : </label>
        <select class="form-control" id="genre" name="genre" required>
            <?php
            foreach($data["arrGenre"] as $arrDetailGenre){
                $objGenre = new Genre;
                $objGenre->hydrate($arrDetailGenre); ?>
                <option value="<?php echo $objGenre->getId()?>" <?php echo(isset($objEvenement) && strpos($objEvenement->getListGenreLibelle(), $objGenre->getLibelle())!==false)?'selected':''?>><?php echo $objGenre->getLibelle() ?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <div class = 'form-group'>
        <label for="content">Contenu : </label>
        <textarea class="form-control" rows="10" id="content" name="content" required><?php echo (isset($objEvenement))?htmlspecialchars($objEvenement->getContentNoNl2br()):''; ?></textarea>
    </div>
    <div class = 'form-group'>
    <input class="btn btn-primary mb-2" type="submit">
    <input class="btn btn-primary mb-2" type="reset">
    <?php if (isset($objEvenement)) { ?>
    <a class="btn btn-primary mb-2" href="evenement">Retour</a>
    <?php } ?>
    </div>
</form>
