<?php

	class presseManager extends manager{

		public function __construct(){
			parent::__construct();
		}
		
		public function getList($intLimit=NULL){
            $strQuery = "SELECT * FROM Presses ORDER BY date_presse DESC";
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();
            return $arrResult;
		}

		public function get($intId){
            $strQuery = "SELECT * FROM Presses WHERE id_presse LIKE " . $intId;
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetch();
            return $arrResult;
		}

        public function addPresse() {
            $fileName=docUpload("doc","ressources/upload/presses/");

            $strQuery = "INSERT INTO `Presses` ( `id_presse`, `nom_fichier_presse`, 
                                                `date_presse`)
                     VALUES (NULL,'" . $fileName . "' , NOW() )";
            $this->_db->exec($strQuery);
        }

        public function updatePresse($id) {
            $fileName=docUpload("doc","ressources/upload/presses/");

            $strQuery = "UPDATE `Presses` SET `nom_fichier_presse` = '" . $fileName . "', 
                                                `date_presse` = NOW() ";

            $strQuery .= "WHERE id_presse LIKE " . $id;

            $this->_db->exec($strQuery);
        }
	}
	