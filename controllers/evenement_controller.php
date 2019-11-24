<?php
	include("models/evenementManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
	include("models/evenement_class.php"); // inclusion de la classe pour les articles
	
	class evenement_ctrl extends controller{

		public function __construct(){
			parent::__construct();
		}

		public function home(&$data){
            $data['page']	= 'home';
            $objEvenementManager	= new evenementManager;
			$arrEvenement		= $objEvenementManager->getList();			
			$data["arrEvenement"]= $arrEvenement;
		}
		
		public function evenement(){
			$data['page']	= 'evenement';
			
			$objEvenementManager	= new evenementManager;
			$arrEvenement 		= $objEvenementManager->getList();	
			
			$data["arrEvenement"]= $arrEvenement;
			$this->_contenu = "evenement.php";
			$this->display($data);

		}

        public function single(){
            $data['page']	= 'evenement';
            $objEvenementManager	= new evenementManager;
            $arrEvenement 		= $objEvenementManager->get($_GET['id']);
            $objEvenement = new Evenement;
            $objEvenement->hydrate($arrEvenement);
            $data["objEvenement"]= $objEvenement;
            $this->_contenu = "objects/single/evenement_object.php";
            $this->display($data);
        }
		
	}