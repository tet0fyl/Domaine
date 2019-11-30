<?php

class actualiteManager extends manager{

    public function __construct(){
        parent::__construct();
    }

    public function getList($intLimit=NULL){
        $strQuery = "SELECT * FROM Actualites";
        $query = $this->_db->query($strQuery);
        $arrResult = $query->fetchAll();
        if($intLimit!=NULL){
            $strQuery .=   " LIMIT " . $intLimit;
        }
        return $arrResult;
    }

    public function get($intId){
        $strQuery = "SELECT * FROM Actualites WHERE id_actualite = $intId";
        $query = $this->_db->query($strQuery);
        $arrResult = $query->fetch();
        return $arrResult;
    }
}