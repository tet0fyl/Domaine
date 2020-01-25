<?php
include("models/adminManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
include("models/evenementManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
include("models/evenement_class.php"); // inclusion de la classe pour les evenement
include("models/actualiteManager_class.php"); // inclusion de la classe pour les actus
include("models/actualite_class.php"); // inclusion de la classe pour les actus
include("models/presse_class.php"); // inclusion de la classe pour les presse
include("models/presseManager_class.php"); // inclusion de la classe pour les presse
include("models/media_class.php"); // inclusion de la classe pour les media
include("models/mediaManager_class.php"); // inclusion de la classe pour les media
include("models/genre_class.php"); // inclusion de la classe pour les genres

class admin_ctrl extends controller{

    public function __construct(){
        parent::__construct();
    }

    public function portail(){
        if(isset($_SESSION['admin']) && $_SESSION['admin']){
            header('Location: home');
        }else{
        $data['page']	= 'admin';
        $this->_contenu = "/admin/admin_portail.php";
        $this->display($data);
        }
    }

    public function connexion(){
        $data['page']	= 'admin';
        $adminManager = new AdminManager();
        if($adminManager->checkConnexion()){
            $_SESSION['admin'] = true;
            header('Location: home');
        }else{
            $_SESSION['admin'] = false;
            $data['error']	= true;
        }
        $this->_contenu = "/admin/admin_portail.php";
        $this->display($data);
    }

    public function deconnexion(){
        $_SESSION['admin'] = false;
        header('Location: home');
    }

     // EVENEMENT //
    public function postevenement(){
        $objEvenementManager	= new evenementManager;
        $objEvenementManager->addEvenement();
        header('Location: evenement');
    }

    public function deleteevenement(){
        $adminManager = new AdminManager();
        $adminManager->delete('Evenements',$_GET['id']);
        header('Location: evenement');
    }

    public function updateevenement() {
        $objEvenementManager	= new evenementManager;
        $objEvenementManager->updateEvenement($_GET['id']);
        header('Location: evenement');
    }

    public function editevenement(){
        $data['page']	= 'Edit Evenement';
        $this->_contenu = "admin/form_evenement.php";
        $objEvenementManager	= new evenementManager;
        $arrEvenement 		= $objEvenementManager->get($_GET['id']);
        $data["arrGenre"] = $objEvenementManager->getListGenre();
        $objEvenement = new Evenement;
        $objEvenement->hydrate($arrEvenement);
        $data["objEvenement"]= $objEvenement;
        $this->display($data);
    }

    //////////
    // ACTU //
    public function postactualite(){
        $objActualiteManager	= new actualiteManager();
        $objActualiteManager->addActualite();
        header('Location: actualite');
    }

    public function deleteactualite(){
        $adminManager = new AdminManager();
        $adminManager->delete('Actualites',$_GET['id']);
        header('Location: actualite');
    }

    public function editactualite () {
        $data['page']	= 'Edit Actu';
        $this->_contenu = "admin/form_actualite.php";
        $objActualiteManager	= new actualiteManager;
        $arrActualite 		= $objActualiteManager->get($_GET['id']);
        $objActualite = new Actualite;
        $objActualite->hydrate($arrActualite);
        $data["objActualite"]= $objActualite;
        $this->display($data);
    }

    public function updateactualite() {
        $objActualiteManager	= new actualiteManager;
        $objActualiteManager->updateActualite($_GET['id']);
        header('Location: actualite');
    }

    //////////
    // PRESSE //
    public function postpresse(){
        $objPresseManager	= new presseManager();
        $objPresseManager->addPresse();
        header('Location: presse');
    }

    public function deletepresse(){
        $adminManager = new AdminManager();
        $adminManager->delete('Presses',$_GET['id']);
        header('Location: presse');
    }

    public function editpresse () {
        $data['page']	= 'Edit Presse';
        $this->_contenu = "admin/form_presse.php";
        $objPresseManager	= new presseManager();
        $arrPresse		= $objPresseManager->get($_GET['id']);
        $objPresse = new Presse;
        $objPresse->hydrate($arrPresse);
        $data["objPresse"]= $objPresse;
        $this->display($data);
    }

    public function updatepresse() {
        $objPresseManager	= new presseManager;
        $objPresseManager->updatePresse($_GET['id']);
        header('Location: presse');
    }

    //////////
    // MEDIAS //
    public function postmedia(){
        $objMediaManager	= new mediaManager();
        $objMediaManager->addMedia();
        header('Location: media');
    }

    public function deletemedia(){
        $adminManager = new AdminManager();
        $adminManager->delete('Medias',$_GET['id']);
        header('Location: media');
    }

    public function editmedia () {
        $data['page']	= 'Edit Presse';
        $this->_contenu = "admin/form_media.php";
        $objMediaManager	= new mediaManager();
        $arrMedia		= $objMediaManager->get($_GET['id']);
        $objMedia = new Media;
        $objMedia->hydrate($arrMedia);
        $data["objMedia"]= $objMedia;
        $this->display($data);
    }

    public function updatemedia() {
        $objMediaManager	= new mediaManager;
        $objMediaManager->updateMedia($_GET['id']);
        header('Location: media');
    }
}