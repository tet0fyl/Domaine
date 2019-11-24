<h2>C'est la page de event</h2>

<?php 
	foreach($data["arrEvenement"] as $arrDetailEvenement){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($arrDetailEvenement);
		include("views/objects/own_page/evenement_object.php");
	}
?>