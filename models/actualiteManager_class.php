<?php

	class actualiteManager extends manager{

		public function __construct(){
			//parent::__construct();
		}
		
		public function getList($intLimit=NULL){	
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;
			$data = ["1" => [
				"id" => "1",
				"title" => "BLIBLOUUUBEFSSDF",
				"img" => "141119.jpg",
				"date" => "21/324/20191123",
				"content" => "Six Six et Le Domaine blibbwedewferdwtr :
				
				Parking gratuit à proximité, animaux, nourriture et boissons extérieurs ne sont pas tolérés."
			]];
			
			return $data;
		}
		
		public function get($intId){
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;
		}		
	}
	