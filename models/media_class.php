<?php

	class media{

		private $_id;
		private $_media;

		public function __construct(){
		}
		
		public function hydrate($arrMedia){
			foreach($arrMedia as $key=>$value){
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

        public function setMedia($data){
            $this->_media = $data;
        }

        /** GETTERS **/
        public function getId(){
            return	$this->_id;
        }

        public function getMedia(){
            return $this->_media;
        }
	}