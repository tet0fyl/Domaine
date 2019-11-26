<?php
include("models/actualiteManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
include("models/actualite_class.php"); // inclusion de la classe pour les actualités

include("models/evenementManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
include("models/evenement_class.php"); // inclusion de la classe pour les evenement

include("models/mediaManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
include("models/media_class.php"); // inclusion de la classe pour les medias

class home_ctrl extends controller{

    public function __construct(){
        parent::__construct();
    }

    public function home(){
        $data['page']	= 'home';
        $objActualiteManager	= new actualiteManager;
        $arrActualite 		= $objActualiteManager->getList(3);

        $objEvenementManager	= new evenementManager;
        $arrEvenement 		= $objEvenementManager->getList(4);

        $objMediaManager	= new mediaManager;
        $arrMedia 		= $objMediaManager->getList(5);

        $data["arrActualite"]= $arrActualite;
        $data["arrEvenement"]= $arrEvenement;
        $data["arrMedia"]= $arrMedia;

        $this->_contenu = "home.php";
        $this->display($data);
    }

}