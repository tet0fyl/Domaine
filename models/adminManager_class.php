<?php

class adminManager extends manager{

    public function __construct(){
        parent::__construct();
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

    public function addEvenement(){
        print_r($_POST);
        $strQuery = "INSERT INTO `Evenements` ( `id_evenement`, `titre_evenement`, 
                                                `date_heure_evenement`, `contenu_evenement`, 
                                                `prix_evenement`, `cancel_evenement`, 
                                                `affiche_evenement`)
                     VALUES (NULL, '" . $_POST['titre'] . "', '" . $_POST['date'] . " " . $_POST['heure'] . "',
                            '" . $_POST['content'] . "', '3', '0', '" . $_FILES['affiche']['name'] . "')";
        $this->_db->exec($strQuery);
        imgUpload();

        /*$strQuery = "SELECT * FROM Evenements
                    WHERE titre_evenement LIKE '" . $_POST['titre'] .
            "' AND affiche_evenement LIKE '" . $_FILES['affiche']['name'] . "'";
        $query = $this->_db->query($strQuery);
        $arrResultEvent = $query->fetch();

        $strQuery = "SELECT * FROM Genres 
                    WHERE libele LIKE '" . $_POST['genre'] . "'";
        $query = $this->_db->query($strQuery);
        $arrResultGenre = $query->fetch();

        $strQuery = "INSERT INTO `TypeEvenement` (`id_genre`, `id_evenement`) VALUES ('".$arrResultEvent['id_evenement']."', '".$arrResultGenre['id_genre']."')";
        $this->_db->exec($strQuery);*/

    }

}


function imgUpload(){
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['affiche']) AND $_FILES['affiche']['error'] == 0) {
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['affiche']['size'] <= 1000000) {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['affiche']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees)) {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['affiche']['tmp_name'], 'ressources/upload/afficheEvent/' . basename($_FILES['affiche']['name']));
        }
    }
}
}
