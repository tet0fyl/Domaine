<?php

	class media{

		private $_id;
		private $_media;
		private $_isImg;

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
        public function setId_media($data){
            $this->_id = $data;
        }

        public function setMedia($data){
            $this->_media = $data;
            if(preg_match("(jpg|jpeg|gif|png)", explode(".", $data)[1])){
                $this->setIsImg(true);
            }else{
                $this->setIsImg(false);
            }

        }

        public function setIsImg($data){
            $this->_isImg = $data;
        }

        /** GETTERS **/
        public function getId(){
            return	$this->_id;
        }

        public function getMedia(){
            return $this->_media;
        }

        public function getTIsImg($data){
            return $this->_isImg;
        }
	}