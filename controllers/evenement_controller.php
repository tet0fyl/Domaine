<?php
	include("models/evenementManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
	include("models/evenement_class.php"); // inclusion de la classe pour les articles
	
	class evenement_ctrl extends controller{

		public function __construct(){
			parent::__construct();
		}

		public function home(&$data){
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
		
	}