<?php
	include("models/evenementManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
	include("models/evenement_class.php"); // inclusion de la classe pour les evenement
    include("models/genre_class.php"); // inclusion de la classe pour les genres

	
	class evenement_ctrl extends controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function evenement(){
			$data['page']	= 'programme';
			
			$objEvenementManager	= new evenementManager;
			$arrFuturEvenement 		= $objEvenementManager->getList(NULL,">");
            $arrPastEvenement 		= $objEvenementManager->getList(NULL,"<");
            $arrGenre               = $objEvenementManager->getListGenre();
            $data["arrGenre"]= $arrGenre;
            $data["arrFuturEvenement"]= $arrFuturEvenement;
            $data["arrPastEvenement"]= $arrPastEvenement;

            $this->_contenu = "evenement.php";
			$this->display($data);

		}

        public function evenementByGenre(){
            $data['page']	= 'programme';
            $objEvenementManager	= new evenementManager;
            $arrFuturEvenement 		= $objEvenementManager->getList(NULL,">");
            $arrPastEvenement 		= $objEvenementManager->getList(NULL,"<");
            $arrGenre = $objEvenementManager->getListGenre();
            $data["arrGenre"]= $arrGenre;
            $data["genre"]= $data["arrGenre"][$_GET['id'] - 1]["libele"];
            $data["arrFuturEvenement"]= $arrFuturEvenement;
            $data["arrPastEvenement"]= $arrPastEvenement;
            $this->_contenu = "evenement.php";
            $this->display($data);
        }

        public function single($edit=true){
            $data['page']	= 'evenement';
            $objEvenementManager	= new evenementManager;
            $arrEvenement = $objEvenementManager->get($_GET['id']);
            $objEvenement = new Evenement;
            $objEvenement->hydrate($arrEvenement);
            $data["objEvenement"]= $objEvenement;
            if ($edit){
                $this->_contenu = "objects/single/evenement_object.php";
                $this->display($data);
            }
        }

	}