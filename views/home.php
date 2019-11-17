<h2>C'est la page d'acceuil</h2>

<h3>EVENT :</h3>
<?php
	foreach($data["arrEvenement"] as $dataEvent){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($dataEvent);
		include("views/objects/evenement_object.php");					
	}	
?>

<h3>ACTU :</h3>
<?php
	foreach($data["arrActualite"] as $dataActu){
		$objActualite = new Actualite;
		$objActualite->hydrate($dataActu);
		include("views/objects/actualite_object.php");					
	}	
?>