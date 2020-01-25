<h2>Actualité</h2>
<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
    <div id="adminDisplayForm">
        <button class='btn btn-primary' >Ajouter</button>
        <?php include("views/admin/form_actualite.php"); ?>
    </div>
<?php }
?>

<div class="mt-4">
<?php
    foreach($data["arrActualite"] as $data){
        $objActualite = new Actualite;
        $objActualite->hydrate($data);
        include("views/objects/own_page/actualite_object.php");
    }
?>
</div>
