<div id="addForm">
<button>Ajouter un évenement</button>
<form style="display: none" method="post" action="admin-postevenement" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre : </label>
        <input type="text" id="titre" name="titre">
    </div>
    <div>
        <label for="affiche">Affiche : </label>
        <input type="file" id="affiche" name="affiche">
    </div>
    <div>
        <label for="date">Date : </label>
        <input type="date" id="date" name="date">
    </div>
    <div>
        <label for="heure" id="heure">Heure : </label>
        <input type="time" id="heure" name="heure">
    </div>
    <div>
        <label for="genre" id="genre">Genre : </label>
        <select id="genre" name="genre">
            <?php
            foreach($data["arrGenre"] as $arrDetailGenre){
                $objGenre = new Genre;
                $objGenre->hydrate($arrDetailGenre); ?>

                <option><?php echo $objGenre->getLibelle() ?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <div>
        <label for="content">Contenu : </label>
        <textarea rows="5" cols="30" minlength="10" maxlength="30" id="content" name="content"></textarea>
    </div>
    <input type="submit">
    <button>Annuler</button>
</form>
</div>