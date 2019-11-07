<?php

	class actualite{

		private $_id;
		private $_title;
		private $_img;
		private $_createdate;
		private $_content;
		
		public function __construct(){
		}
		
		public function hydrate($arrActualite){
			foreach($arrActualite as $key=>$value){
				$setterName = "set".ucfirst($key);
				if (method_exists($this, $setterName)){
					$this->$setterName($value);
				}
			}
		}		
	}