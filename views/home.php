<!-- ///////// SLIDER MEDIA ///////// -->
<div id="myCarousel" class="carousel slide bg-dark" data-ride="carousel">
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
<div class="d-flex mt-3 justify-content-around flex-wrap">
<div class="shadow mb-2 py-1 col-md-5 col-sm-12">
<?php
	foreach($data["arrEvenement"] as $dataEvent){
		$objEvenement = new Evenement;
		$objEvenement->hydrate($dataEvent);
		include("views/objects/home/evenement_object.php");
	}
?>
</div>

    <!-- ///////// SLIDER ACTU ///////// -->
    <div id="myCarouselActu" class="carousel slide bg-light rounded shadow col-md-5 col-sm-12" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarouselActu" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselActu" data-slide-to="1"></li>
            <li data-target="#myCarouselActu" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            $flag=true;
            foreach($data["arrActualite"] as $dataActu){
            $objActualite = new Actualite;
            $objActualite->hydrate($dataActu);
            if($flag){
            $flag=false;
            ?>
            <div class="carousel-item active">
                <?php
                } else { ?>
                <div class="carousel-item">
                    <?php }
                    include("views/objects/home/actualite_object.php")?>;
                </div>
                <?php }
                ?>
            </div>
            <a class="carousel-control-prev" href="#myCarouselActu" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarouselActu" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /////////  ///////// -->
    </div>

