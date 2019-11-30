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