<h2>C'est la page de presse</h2>


<?php
foreach($data["arrPresse"] as $data){
    $objPresse = new Presse;
    $objPresse->hydrate($data);
    include("views/objects/own_page//presse_object.php");
}
?>