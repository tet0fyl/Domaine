<?php

	class presse{

		private $_id;
		private $_fichier;
		private $_date;
		
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


        /** SETTERS **/
        public function setId($data){
            $this->_id = $data;
        }

        public function setFichier($data){
            $this->_fichier = $data;
        }

        public function setDate($data){
            $this->_date = $data;
        }

        /** GETTERS **/
        public function getId(){
            return	$this->_id;
        }

        public function getFichier(){
            return $this->_fichier;
        }

        public function getDate(){
            return $this->_date;
        }
	}