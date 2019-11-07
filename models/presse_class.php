<?php

	class presse{

		private $_id;
		private $_title;
		private $_url;
		
		public function __construct(){
		}
		
		public function hydrate($arrPresse){
			foreach($arrPresse as $key=>$value){
				$setterName = "set".ucfirst($key);
				if (method_exists($this, $setterName)){
					$this->$setterName($value);
				}
			}
		}		
	}