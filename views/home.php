<!-- Tu fais tes div pour contenir la view des objets -->
<div class="carrouselMediaContainer">
    <div class="carrouselMediaPanel">
<?php
foreach($data["arrMedia"] as $dataMedia){
    $objMedia = new Media();
    $objMedia->hydrate($dataMedia);
    include("views/objects/home/media_object.php"); // <-- Puis tu te rend dans ce fichier pour modifier l'objet en lui meme
}
?>
    </div>
</div>

<h3>EVENT :</h3>
<?php
	foreach($data["arrEvenement"] as $dataEvent){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($dataEvent);
		include("views/objects/home/evenement_object.php");
	}	
?>

<h3>ACTU :</h3>
<?php
	foreach($data["arrActualite"] as $dataActu){
		$objActualite = new Actualite;
		$objActualite->hydrate($dataActu);
		include("views/objects/home/actualite_object.php");
	}
?>