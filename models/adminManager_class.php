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
        $fileName=imgUpload("affiche","ressources/upload/afficheEvent/");

        $strQuery = "INSERT INTO `Evenements` ( `id_evenement`, `titre_evenement`, 
                                                `date_heure_evenement`, `contenu_evenement`, 
                                                `prix_evenement`, `cancel_evenement`, 
                                                `affiche_evenement`)
                     VALUES (NULL, '" . $_POST['titre'] . "', '" . $_POST['date'] . " " . $_POST['heure'] . "',
                            '" . $_POST['content'] . "', '3', '0', '" . $fileName . "')";
        $this->_db->exec($strQuery);
        $strQuery = "INSERT INTO `TypeEvenement` (`id_genre`, `id_evenement`) VALUES (
                    " . $_POST['genre'] . " , ".
                    $this->_db->lastInsertId() . ")";
        $this->_db->exec($strQuery);
    }

    public function delete($table,$id){
        if($table=='evenements'){
            $strQuery = "DELETE FROM `TypeEvenement` WHERE id_evenement = " . $id;
            $this->_db->exec($strQuery);
        }


        $strQuery = "DELETE FROM " . $table . " WHERE id_" . substr($table,0,strlen($table)-1)  . " = " . $id;
        $this->_db->exec($strQuery);
    }
}


function imgUpload($postName,$path){
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES[$postName]) AND $_FILES[$postName]['error'] == 0) {
    // Testons si le fichier n'est pas trop gros
    if ($_FILES[$postName]['size'] <= 1000000) {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES[$postName]['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees)) {
            // On peut valider le fichier et le stocker définitivement
            $fileName = date_format(new DateTime(), 'Ymd') . "." . pathinfo($_FILES[$postName]['name'])['extension'];
            move_uploaded_file($_FILES[$postName]['tmp_name'], $path . $fileName);
            return $fileName;
        }
    }
}
}
