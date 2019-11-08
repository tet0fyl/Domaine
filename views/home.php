<h2>C'est la page d'acceuil</h2>

<?php 

	// Boucler autant de fois que le tableau contient d'éléments => foreach
	foreach($data["arrEvenement"] as $arrDetailEvenement){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($arrDetailEvenement);
		include("views/objects/evenement_object.php");					
	}	
?>

<?php 
	// Boucler autant de fois que le tableau contient d'éléments => foreach
	foreach($data["arrActualite"] as $arrDetailEvenement){
		$objActualite = new Actualite;
		$objActualite->hydrate($arrDetailEvenement);
		include("views/objects/actualite_object.php");					
	}	
?>