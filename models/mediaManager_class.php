<?php

	class mediaManager extends manager{

		public function __construct(){
			parent::__construct();
		}
		
		public function getImgList($intLimit=NULL){
            $strQuery = "    SELECT * FROM Medias 
                            WHERE media LIKE '%jpg%' 
                            OR media LIKE '%png%' 
                            OR media LIKE '%jpeg%' 
                            OR media LIKE '%gif%' 
                         ORDER BY id_media DESC";
            if($intLimit!=NULL){
                $strQuery .=   " LIMIT " . $intLimit;
            }

            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();

            return $arrResult;
		}

        public function get($intId){
            $strQuery = "SELECT * FROM Medias WHERE id_media LIKE " . $intId;
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetch();
            return $arrResult;
        }

        public function addMedia() {
            $fileName=imgUpload("image","ressources/upload/medias/");

            $strQuery = "INSERT INTO `Medias` ( `id_media`, `media`)
                     VALUES (NULL,'" . $fileName . "')";
            $this->_db->exec($strQuery);
        }

        public function updateMedia($id) {
            $fileName=imgUpload("image","ressources/upload/medias/");

            $strQuery = "UPDATE `Medias` SET `media` = '" . $fileName . "' WHERE id_media LIKE " . $id ;

            $this->_db->exec($strQuery);
        }
	}
	