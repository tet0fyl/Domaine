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
                $strQuery .=  " HAVING listGenreId LIKE '%". $_GET['id'] ."%'";
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

        public function addEvenement(){
            $fileName=imgUpload("affiche","ressources/upload/afficheEvent/");

            $strQuery = "INSERT INTO `Evenements` ( `id_evenement`, `titre_evenement`, 
                                                `date_heure_evenement`, `contenu_evenement`, 
                                                `prix_evenement`, `cancel_evenement`, 
                                                `affiche_evenement`)
                     VALUES (NULL, '" . $_POST['titre'] . "', '" . $_POST['date'] . " " . $_POST['heure'] . "',
                            '" . $_POST['content'] . "', '3', '0', '" . $fileName . "')";
            $this->_db->exec($strQuery);
            $strQuery = "INSERT INTO `TypeEvenement` (`id_genre`, `id_evenement`) VALUES (
                    " . $_POST['genre'] . " , ".
                $this->_db->lastInsertId() . ")";
            $this->_db->exec($strQuery);
        }


        public function updateEvenement($id){
            $strQuery = "UPDATE `Evenements` SET   `titre_evenement` ='" . $_POST['titre'] . "', 
                                                        `date_heure_evenement` ='" . $_POST['date'] . ' ' . $_POST['heure'] . "', 
                                                        `contenu_evenement` = '" . $_POST['content'] . "'";
            if($_POST['changeAffiche']) {
                $fileName=imgUpload("affiche","ressources/upload/afficheEvent/");
                $strQuery .= ",`affiche_evenement` = '" . $fileName . "'";
            }

            $strQuery .= "WHERE id_evenement = " . $id;
            $this->_db->exec($strQuery);
        }
	}


function imgUpload($postName,$path){
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES[$postName]) AND $_FILES[$postName]['error'] == 0) {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES[$postName]['size'] <= 1000000) {
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES[$postName]['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {
                // On peut valider le fichier et le stocker définitivement
                $fileName = date_format(new DateTime(), 'Ymd') . "." . pathinfo($_FILES[$postName]['name'])['extension'];
                move_uploaded_file($_FILES[$postName]['tmp_name'], $path . $fileName);
                return $fileName;
            }
        }
    }
}
	