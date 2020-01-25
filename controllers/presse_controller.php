<?php
	include("models/presseManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
	include("models/presse_class.php"); // inclusion de la classe pour les articles
	
	class presse_ctrl extends controller{

		public function __construct(){
			parent::__construct();
		}

		public function presse(){
			$data['page']	= 'presse';
			$objPresseManager	= new presseManager;
			$arrPresse		= $objPresseManager->getList();
			$data["arrPresse"]= $arrPresse;
            $this->_contenu = "presse.php";
			$this->display($data);			
		}
		
	}