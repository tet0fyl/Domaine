<form method="post" action="<?php echo (isset($objMedia))?'admin-updatemedia-' . $objMedia->getId():'admin-postmedia'; ?>" enctype="multipart/form-data">
    <div class='custom-file'>
        <input class="custom-file-input" type="file" id="image" name="image" required>
        <label class="custom-file-label" for="image">Img : </label>
    </div>
    <div class = 'form-group'>
        <input class="btn btn-primary mb-2" type="submit">
        <?php if (isset($objPresse)) { ?>
            <a class="btn btn-primary mb-2" href="media">Retour</a>
        <?php } ?>
    </div>
</form>
