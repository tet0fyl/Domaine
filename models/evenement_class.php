<?php

	class evenement{

		private $_id;
		private $_title;
		private $_img;
		private $_date;
		private $_content;
		private $_prix;
        private $_cancel;

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
		public function setId_evenement($data){
			$this->_id = $data;
		}

		public function setTitre_evenement($data){
			$this->_title = $data;
		}

		public function setAffiche_evenement($data){
			$this->_img = $data;
		}

		public function setDate_heure_evenement($data){
			$this->_date = $data;
		}

		public function setContenu_evenement($data){
			$this->_content = $data;
		}

        public function setPrix_evenement($data){
            $this->_prix = $data;
        }

        public function setCancel_evenement($data){
		    if($data==0){
                $this->_cancel = true;
            }else{
                $this->_cancel = false;
            }
        }
		
		/** GETTERS **/
        public function getId(){
            return $this->_id;
        }

        public function getTitle(){
			return strtoupper($this->_title);
		}	

		public function getImg(){
			return	$this->_img;
		}

		public function getDate(){
			return $this->_date;
		}

        public function getFrenchDate(){
            $dayMonthYears = explode(" ",$this->_date)[0];
            $day = explode("-",$dayMonthYears)[2];
            $month = explode("-",$dayMonthYears)[1];
            $year = explode("-",$dayMonthYears)[0];
            return $day . "/" . $month . "/" . $year;
        }

        public function getDay(){
            $dayMonthYears = explode(" ",$this->_date)[0];
            $day = explode("-",$dayMonthYears)[2];
            return $day ;
        }

        public function getMonth(){
            $dayMonthYears = explode(" ",$this->_date)[0];
            $month = explode("-",$dayMonthYears)[1];
            $arrMonth = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"];
            return $arrMonth[intval($month)-1] ;
        }

        public function getHour(){
            return explode(" ",$this->_date)[1];
        }

		public function getContent(){
			return nl2br($this->_content);
		}

        public function getShortContent(){
            return substr($this->_content,0,300) . "..." ;
        }
	}