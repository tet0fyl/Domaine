<?php

	class presseManager extends manager{

		public function __construct(){
			//parent::__construct();
		}
		
		public function getList($intLimit=NULL){	
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
           return [ "1" => ["id" => "1",
                            "fichier" => "SixSix-1er-Mai-2019.pdf",
                            "date" => "2019-05-04"],
                    "2" => ["id" => "2",
                            "fichier" => "SixSix-Automne-2019.pdf",
                            "date" => "2019-10-04"],
                    "3" => ["id" => "3",
                            "fichier" => "SixSix-Avril-2019.pdf",
                            "date" => "2019-04-04"]];
		}
		
		public function get($intId){
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;
		}		
	}
	