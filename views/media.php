<h2>Media</h2>
<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
    <div id="adminDisplayForm">
        <button class='btn btn-primary' >Ajouter</button>
        <?php include("views/admin/form_media.php"); ?>
    </div>
<?php }
?>

<?php
	foreach($data["arrMedia"] as $dataMedia){
		$objMedia = new Media;
		$objMedia->hydrate($dataMedia);
		include("views/objects/own_page/media_object.php");
	}	
?>