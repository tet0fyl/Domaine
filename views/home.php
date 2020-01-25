<!-- ///////// SLIDER ///////// -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
<?php
$flag=true;
foreach($data["arrMedia"] as $dataMedia){
    $objMedia = new Media();
    $objMedia->hydrate($dataMedia);
    if($flag){
        $flag=false;
        ?>
        <div class="carousel-item active">
        <?php
    } else { ?>
        <div class="carousel-item">
    <?php }
    include("views/objects/home/media_object.php");?>
    </div>
<?php }
?>
    </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
    <!-- /////////  ///////// -->

    <!-- ///////// CALENDAR ///////// -->

<div class="shadow mt-3 mb-2 py-1 col-md-6 col-sm-12">
<?php
	foreach($data["arrEvenement"] as $dataEvent){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($dataEvent);
		include("views/objects/home/evenement_object.php");
	}
?>
</div>

<h3>ACTU :</h3>
<?php
	foreach($data["arrActualite"] as $dataActu){
		$objActualite = new Actualite;
		$objActualite->hydrate($dataActu);
		include("views/objects/home/actualite_object.php");
	}
?>