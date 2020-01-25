<?php if (isset($objPresse)){ ?>
    <h2>Mise à jour Presse</h2>
<?php } ?>
<form class='mt-2' method="post" action="<?php echo (isset($objPresse))?'admin-updatepresse-' . $objPresse->getId():'admin-postpresse'; ?>" enctype="multipart/form-data">
    <div class='custom-file'>
        <input class="custom-file-input" type="file" id="doc" name="doc" required>
        <label class="custom-file-label" for="doc">Doc : </label>
    </div>
    <div class = 'form-group'>
        <input class="btn btn-primary mb-2" type="submit">
        <?php if (isset($objPresse)) { ?>
            <a class="btn btn-primary mb-2" href="presse">Retour</a>
        <?php } ?>
    </div>
</form>
