<form class='mt-2' method="post" action="<?php echo (isset($objActualite))?'admin-updateactualite-' . $objActualite->getId():'admin-postactualite'; ?>" enctype="multipart/form-data">
    <div class = 'form-group'>
        <label for="titre">Titre : </label>
        <input class="form-control" type="text" id="titre" name="titre" value="<?php echo (isset($objActualite))?$objActualite->getTitle():''; ?>" required>
    </div>
    <?php if (isset($objActualite)) { ?>
        <div class='form-check displayIfCheckBox'>
            <input  class="form-check-input" type="checkbox" id="changeAffiche" name="changeAffiche">
            <label  class="form-check-label" for="changeAffiche">Changer l'image : </label>
        </div>
    <?php } ?>
    <div class='custom-file displayIfCheckBox'>
        <label class="custom-file-label" for="affiche">Img : </label>
        <input class="custom-file-input" type="file" id="imgInp" name="affiche" <?php echo (isset($objActualite))?'':'required'?>>
    </div>
    <div class="form-group mt-2">
        <img class="img-fluid shadow" width="200px" id='renderImg' src="#" alt="">
    </div>
    <div class = 'form-group'>
        <label for="content">Contenu : </label>
        <textarea class="form-control" rows="10" id="content" name="content" required><?php echo (isset($objActualite))?htmlspecialchars($objActualite->getContentNoNl2br()):''; ?></textarea>
    </div>
    <div class = 'form-group'>
        <input class="btn btn-primary mb-2" type="submit">
        <input class="btn btn-primary mb-2" type="reset">
        <?php if (isset($objActualite)) { ?>
            <a class="btn btn-primary mb-2" href="actualite">Retour</a>
        <?php } ?>
    </div>
</form>
