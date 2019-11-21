<?php

	class mediaManager extends manager{

		public function __construct(){
			//parent::__construct();
		}
		
		public function getList($intLimit=NULL){	
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
           return [ "1" => ["media" => "01.jpg"],
                    "2" => ["media" => "02.jpg"],
                    "3" => ["media" => "03.jpg"],
                    "4" => ["media" => "04.jpg"],
                    "5" => ["media" => "05.jpg"],
                    "6" => ["media" => "06.jpg"],
                    "7" => ["media" => "07.jpg"]
                    ];
		}
		
		public function get($intId){
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;
		}		
	}
	