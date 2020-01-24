<form method="post" action="<?php echo (isset($objEvenement))?'admin-updateevenement-' . $objEvenement->getId():'admin-postevenement'; ?>" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre : </label>
        <input type="text" id="titre" name="titre" value="<?php echo (isset($objEvenement))?$objEvenement->getTitle():''; ?>" required>
    </div>
    <div class='displayIfCheckBox'>
        <label for="changeAffiche">Changer l'image : </label>
        <input type="checkbox" id="changeAffiche" name="changeAffiche">
    </div>
    <div class='displayIfCheckBox'>
        <label for="affiche">Affiche : </label>
        <input type="file" id="affiche" name="affiche" <?php echo (isset($objEvenement))?'':'required'?>>
    </div>
    <div>
        <label for="date">Date : </label>
        <input type="date" id="date" name="date" value="<?php echo (isset($objEvenement))?$objEvenement->getYearsMonthDay():''; ?>" required>
    </div>
    <div>
        <label for="heure" id="heure">Heure : </label>
        <input type="time" id="heure" name="heure" value="<?php echo (isset($objEvenement))?$objEvenement->getHour():''; ?>" required>
    </div>
    <div>
        <label for="genre" id="genre">Genre : </label>
        <select id="genre" name="genre" required>
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
    <div>
        <label for="content">Contenu : </label>
        <textarea rows="5" cols="30" minlength="10" maxlength="30" id="content" name="content" required><?php echo (isset($objEvenement))?htmlspecialchars($objEvenement->getContentNoNl2br()):''; ?></textarea>
    </div>
    <input type="submit">
    <input type="reset">
</form>
