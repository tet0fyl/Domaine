<?php
include("models/presseManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
include("models/presse_class.php"); // inclusion de la classe pour les articles

class admin_ctrl extends controller{

    public function __construct(){
        parent::__construct();
    }

    public function admin_portail(){
        $data['page']	= 'admin';
        $this->_contenu = "/admin/admin_portail.php";
        $this->display($data);
    }


}