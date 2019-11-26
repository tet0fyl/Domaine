<?php

	class evenementManager extends manager{

		public function __construct(){
			parent::__construct();
		}
		
		public function getList($intLimit=NULL){
            $strQuery = "    SELECT *, GROUP_CONCAT(TypeEvenement.id_genre ) AS listGenreId, GROUP_CONCAT(Genres.libele ) AS listGenreLibelle FROM `Evenements`
                            INNER JOIN TypeEvenement
                            ON Evenements.id_evenement = TypeEvenement.id_evenement
                            INNER JOIN Genres
                            ON Genres.id_genre = TypeEvenement.id_genre
                            GROUP BY Evenements.id_evenement
                            ORDER BY date_heure_evenement DESC";
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

        public function getListByGenre($intId){
            $strQuery = "SELECT *, GROUP_CONCAT(TypeEvenement.id_genre ) AS listGenreId, GROUP_CONCAT(Genres.id_genre ) AS listGenreId FROM `Evenements`
                            INNER JOIN TypeEvenement
                            ON Evenements.id_evenement = TypeEvenement.id_evenement
                            INNER JOIN Genres
                            ON Genres.id_genre = TypeEvenement.id_genre
                            GROUP BY Evenements.id_evenement
                            HAVING listGenreId LIKE '%". $intId ."%'
                            ORDER BY date_heure_evenement DESC";
            $query = $this->_db->query($strQuery);
            $arrResult = $query->fetchAll();
            return $arrResult;
        }
	}
	