<?php

	class mediaManager extends manager{

		public function __construct(){
			parent::__construct();
		}
		
		public function getList($intLimit=NULL){
            $strQuery = "    SELECT * FROM Medias 
                            WHERE media LIKE '%jpg%' 
                            OR media LIKE '%png%' 
                            OR media LIKE '%jpeg%' 
                            OR media LIKE '%gif%' 
                         ORDER BY id_media DESC";
            if($intLimit!=NULL){
                $strQuery .=   " LIMIT " . $intLimit;
            }

            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();

            return $arrResult;
		}
		
		public function get($intId){
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;
		}		
	}
	