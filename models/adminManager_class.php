<?php

class adminManager extends manager{

    public function __construct(){
        parent::__construct();
    }

    public function getList($intLimit=NULL){
        $strQuery = "SELECT * FROM Actualites";
        $query = $this->_db->query($strQuery);
        $arrResult = $query->fetchAll();

    }

    public function checkConnexion(){
        $strQuery = "SELECT * FROM Administrateurs 
                    WHERE identifiant_admin LIKE '" . $_POST['identifiant'] .
                    "' AND password_admin LIKE '" . $_POST['password'] . "'";
        $query = $this->_db->query($strQuery);
        $arrResult = $query->fetchAll();

        if(count($arrResult) > 0){
            return true;
        }else{
            return false;
        }
    }

}


function imgUpload(){
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['monfichier']['size'] <= 1000000) {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees)) {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}
}
