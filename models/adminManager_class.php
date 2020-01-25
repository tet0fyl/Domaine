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

    public function delete($table,$id){
        if($table=='Evenements'){
            $strQuery = "DELETE FROM `TypeEvenement` WHERE id_evenement = " . $id;
            $this->_db->exec($strQuery);
        }


        $strQuery = "DELETE FROM " . $table . " WHERE id_" . substr($table,0,strlen($table)-1)  . " = " . $id;
        $this->_db->exec($strQuery);
    }

}


