
<div class="Slider">
    <div class="SliderPanel">
<?php
foreach($data["arrMedia"] as $dataMedia){
    $objMedia = new Media();
    $objMedia->hydrate($dataMedia);
    include("views/objects/home/media_object.php");
}
?>
        <div class="Caption">Caption</div>
    </div>
        <div class="SliderControl">
            <a class="left" onclick="plusSlides(-1)">&#10094;</a>
            <a class="right" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="SliderPosition">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
</div>

<div class="calendrier">
<div class="container">
<?php
	foreach($data["arrEvenement"] as $dataEvent){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($dataEvent);
		include("views/objects/home/evenement_object.php");
	}
?>
</div>
</div>

<h3>ACTU :</h3>
<?php
	foreach($data["arrActualite"] as $dataActu){
		$objActualite = new Actualite;
		$objActualite->hydrate($dataActu);
		include("views/objects/home/actualite_object.php");
	}
?>