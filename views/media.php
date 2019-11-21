<h2>C'est la page des medias</h2>

<?php
	foreach($data["arrMedia"] as $dataMedia){
		$objMedia = new Media;
		$objMedia->hydrate($dataMedia);
		include("views/objects/media_object.php");
	}	
?>