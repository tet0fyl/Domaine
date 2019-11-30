<?php
include("models/adminManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD

class admin_ctrl extends controller{

    public function __construct(){
        parent::__construct();
    }

    public function admin_portail(){
        $data['page']	= 'admin';
        $this->_contenu = "/admin/admin_portail.php";
        $this->display($data);
    }

    public function admin_connexion(){
        $data['page']	= 'admin';
        $adminManager = new AdminManager();
        if($adminManager->checkConnexion()){
            $_SESSION['admin'] = true;
        }else{
            $_SESSION['admin'] = false;
        }
        $this->_contenu = "/admin/admin_portail.php";
        $this->display($data);
    }

    public function admin_deconnexion(){
        $_SESSION['admin'] = false;
        header('Location: home');
    }




}