<h2>C'est la page d'actu</h2>

<?php
foreach($data["arrActualite"] as $data){
    $objActualite = new Actualite;
    $objActualite->hydrate($data);
    include("views/objects/own_page/actualite_object.php");
}
?>