<h2>C'est la page de event</h2>

<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']) {
    include("views/admin/form_evenement.php");
}
?>


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
<h2>Prochainement</h2>
<hr>
<?php 
	foreach($data["arrFuturEvenement"] as $arrDetailEvenement){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($arrDetailEvenement);
		include("views/objects/own_page/evenement_object.php");
	}
?>

<h2>Passé</h2>
<hr>
<?php
foreach($data["arrPastEvenement"] as $arrDetailEvenement){
    $objEvenement = new Evenement;
    $objEvenement->hydrate($arrDetailEvenement);
    include("views/objects/own_page/evenement_object.php");
}
?>
