<h2>C'est la page d'acceuil</h2>

<h3>Slider :</h3>
<?php
foreach($data["arrMedia"] as $dataMedia){
    $objMedia = new Media;
    $objMedia->hydrate($dataMedia);
    include("views/objects/home/slider_object.php");
}
?>



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