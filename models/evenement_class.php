<?php

	class evenement{

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
		public function setId($data){
			$this->_id = $data;
		}

		public function setTitle($data){
			$this->_title = $data;
		}

		public function setImg($data){
			$this->_img = $data;
		}

		public function setDate($data){
			$this->_date = $data;
		}

		public function setContent($data){
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