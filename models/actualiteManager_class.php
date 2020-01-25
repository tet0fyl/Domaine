<?php

	class actualiteManager extends manager{

		public function __construct(){
			parent::__construct();
		}
		
		public function getList($intLimit=NULL){
            $strQuery = "SELECT * FROM Actualites ORDER BY date_actualite DESC";
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();
            if($intLimit!=NULL){
                $strQuery .=   " LIMIT " . $intLimit;
            }
            return $arrResult;
        }

		public function get($intId){
            $strQuery = "SELECT * FROM Actualites WHERE id_actualite = $intId";
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetch();
            return $arrResult;
		}

        public function addActualite(){
            $fileName=imgUpload("affiche","ressources/upload/afficheActu/");

            $strQuery = "INSERT INTO `Actualites` ( `id_actualite`, `titre_actualite`, 
                                                `date_actualite`, `contenu_actualite`,  
                                                `affiche_actualite`)
                     VALUES (NULL, '" . $_POST['titre'] . "', NOW() ,
                            '" . $_POST['content'] . "', '" . $fileName . "')";
            $this->_db->exec($strQuery);
        }


        public function updateActualite($id){
            $strQuery = "UPDATE `Actualites` SET   `titre_actualite` ='" . $_POST['titre'] . "', 
                                                        `date_actualite` = NOW(), 
                                                        `contenu_actualite` = '" . $_POST['content'] . "'";
            if($_POST['changeAffiche']) {
                $fileName=imgUpload("affiche","ressources/upload/afficheEvent/");
                $strQuery .= ",`affiche_actualite` = '" . $fileName . "'";
            }

            $strQuery .= "WHERE id_actualite = " . $id;
            $this->_db->exec($strQuery);
        }
	}
	