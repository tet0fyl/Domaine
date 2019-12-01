<div id="addForm">
<button>Ajouter un évenement</button>
<form style="display: none" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre</label>
        <input type="text" id="titre">
    </div>
    <div>
        <label for="date">Date</label>
        <input type="date" id="date">
    </div>
    <div>
        <label for="heure" id="heure">Heure</label>
        <input type="time" id="heure">
    </div>
    <div>
        <label for="affiche" id="affiche">Affiche</label>
        <input type="file" id="affiche">
    </div>
    <div>
        <label for="content">Contenu</label>
        <textarea rows="5" cols="30" minlength="10" maxlength="30" id="content"></textarea>
    </div>
    <input type="submit">
    <button>Annuler</button>
</form>
</div>