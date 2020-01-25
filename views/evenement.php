<h2>Le Programme</h2>

<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
    <div id="adminDisplayForm">
    <button class='btn btn-primary' >Ajouter</button>
    <?php include("views/admin/form_evenement.php"); ?>
    </div>
<?php }
?>

<h3 class="mt-2">Filtre :</h3>
<div class="d-flex flex-wrap justify-content-around align-content-between">
<?php
    foreach($data["arrGenre"] as $arrDetailGenre){
        $objGenre = new Genre;
        $objGenre->hydrate($arrDetailGenre);
        if(isset($genre) && $genre == $objGenre->getLibelle()){
            $objGenre->setSelected(true);
        }
        include("views/objects/own_page/genre_object.php");
    }
?>
</div>


<?php
if(count($data["arrFuturEvenement"]) == 0 && count($data["arrPastEvenement"]) == 0){?>
    <p>Pas d'évenement dans ce genre musical pour le moment !</p>
<?php } else {?>

    <?php if(count($data["arrFuturEvenement"]) != 0) { ?>

        <h3 class="mt-2">Prochainement</h3>
        <hr>

        <?php
        foreach ($data["arrFuturEvenement"] as $arrDetailEvenement) {
            $objEvenement = new Evenement;
            $objEvenement->hydrate($arrDetailEvenement);
            include("views/objects/own_page/evenement_object.php");
        }
    }
    ?>


<?php
if(count($data["arrPastEvenement"]) != 0){?>
    <h3 class="mt-2">Passé</h3>
    <hr>
    <div class="past-event">
    <?php
    foreach ($data["arrPastEvenement"] as $arrDetailEvenement) {
        $objEvenement = new Evenement;
        $objEvenement->hydrate($arrDetailEvenement);
        include("views/objects/own_page/evenement_object.php");
    }
}
}
?>
    </div>


