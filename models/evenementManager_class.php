<?php

	class evenementManager extends manager{

		public function __construct(){
			parent::__construct();
		}
		
		public function getList($intLimit=NULL,$sign=NULL){
            $strQuery = "    SELECT *, GROUP_CONCAT(TypeEvenement.id_genre ) AS listGenreId, GROUP_CONCAT(Genres.libele ) AS listGenreLibelle FROM `Evenements`
                            INNER JOIN TypeEvenement
                            ON Evenements.id_evenement = TypeEvenement.id_evenement
                            INNER JOIN Genres
                            ON Genres.id_genre = TypeEvenement.id_genre";

            if($sign!=NULL){
                $strQuery .=   " WHERE date_heure_evenement " . $sign . " NOW() ";
            }

            $strQuery .= " GROUP BY Evenements.id_evenement";



            if(isset($_GET['id'])){
                $strQuery .=  "HAVING listGenreId LIKE '%". $_GET['id'] ."%'";
            }

            $strQuery .=  " ORDER BY date_heure_evenement DESC ";

            if($intLimit!=NULL){
                $strQuery .=   " LIMIT " . $intLimit;
            }



            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();
            return $arrResult;
		}
		
		public function get($intId){
		    $strQuery = "   SELECT *, GROUP_CONCAT(TypeEvenement.id_genre ) AS listGenreId, GROUP_CONCAT(Genres.libele ) AS listGenreLibelle FROM `Evenements`
                            INNER JOIN TypeEvenement
                            ON Evenements.id_evenement = TypeEvenement.id_evenement
                            INNER JOIN Genres
                            ON Genres.id_genre = TypeEvenement.id_genre
                            WHERE Evenements.id_evenement LIKE $intId
                            GROUP BY Evenements.id_evenement";
		    $query = $this->_db->query($strQuery);
		    $arrResult = $query->fetch();
            return $arrResult;
		}

        public function getListGenre(){
            $strQuery = "SELECT * FROM Genres";
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();
            return $arrResult;
        }
	}
	