<?php

	class evenementManager extends manager{

		public function __construct(){
			parent::__construct();
		}
		
		public function getList($intLimit=NULL){
            $strQuery = "SELECT * FROM Evenements";
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();
            return $arrResult;
		}
		
		public function get($intId){
		    $strQuery = "SELECT * FROM Evenements WHERE id_evenement LIKE $intId";
		    $query = $this->_db->query($strQuery);
		    $arrResult = $query->fetch();
            return $arrResult;
		}
	}
	