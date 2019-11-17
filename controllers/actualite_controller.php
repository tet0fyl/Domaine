<?php
	include("models/actualiteManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
	include("models/actualite_class.php"); // inclusion de la classe pour les articles
	
	class actualite_ctrl extends controller{

		public function __construct(){
			parent::__construct();
		}

		public function home(&$data){
			$objActualiteManager	= new actualiteManager;
			$arrActualite 		= $objActualiteManager->getList(5);
			$data["arrActualite"]= $arrActualite;
		}
		
		public function actualite(){
			$data['page']	= 'actualite';
			
			$objActualiteManager	= new actualiteManager;
			$arrActualite 		= $objActualiteManager->getList();	
			
			$data["arrActualite"]= $arrActualite;
			$this->_contenu = "actualite.php";
			$this->display($data);

		}
		
	}