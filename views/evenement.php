<h2>C'est la page de event</h2>




<?php 
	// Boucler autant de fois que le tableau contient d'éléments => foreach
	foreach($data["arrEvenement"] as $arrDetailEvenement){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($arrDetailEvenement);
		include("views/objects/evenement_object.php");					
	}	
?>