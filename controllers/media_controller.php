<?php
	include("models/mediaManager_class.php"); // on inclut le fichier contenant les fonctions d'appels à la BDD
	include("models/media_class.php"); // inclusion de la classe pour les articles
	
	class media_ctrl extends controller{

		public function __construct(){
			parent::__construct();
		}

		public function media(){
			$data['page']	= 'media';
            $objMediaManager	= new mediaManager;
            $arrMedia		= $objMediaManager->getList();
			
			$data["arrMedia"]= $arrMedia;
			$this->_contenu = "media.php";
			$this->display($data);			
		}
	
		
	}