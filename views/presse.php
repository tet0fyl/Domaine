<h2>Presse</h2>
<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
    <div id="adminDisplayForm">
        <button class='btn btn-primary' >Ajouter</button>
        <?php include("views/admin/form_presse.php"); ?>
    </div>
<?php }
?>
<div class="mt-4">
<?php
    foreach($data["arrPresse"] as $data){
        $objPresse = new Presse;
        $objPresse->hydrate($data);
        include("views/objects/own_page//presse_object.php");
    }
?>
</div>
