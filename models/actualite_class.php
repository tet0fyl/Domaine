<?php

	class actualite{

		private $_id;
		private $_title;
		private $_img;
		private $_date;
		private $_content;
		
		public function __construct(){
		}
		
		public function hydrate($arrEvenement){
			foreach($arrEvenement as $key=>$value){
				$setterName = "set".ucfirst($key);
				if (method_exists($this, $setterName)){
					$this->$setterName($value);
				}
			}
		}

		/** SETTERS **/
		public function setId_actualite($data){
			$this->_id = $data;
		}

		public function setTitre_actualite($data){
			$this->_title = $data;
		}

		public function setAffiche_actualite($data){
			$this->_img = $data;
		}

		public function setDate_actualite($data){
			$this->_date = $data;
		}

		public function setContenu_actualite($data){
			$this->_content = $data;
		}
		
		/** GETTERS **/
		public function getTitle(){
			return strtoupper($this->_title);
		}	

		public function getImg(){
			return	$this->_img;
		}

		public function getDate(){
			return $this->_date;
		}

		public function getContent(){
			return nl2br($this->_content);
		}
	}