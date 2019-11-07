<?php
	/** Controller mère **/ 
	class controller{
		
		protected $_contenu;
		
		public function __construct(){
		}
		
		protected function display($data = array()){
			// Le tableau des variables ($data) est parcouru
			foreach($data as $key=>$value){
				// Pour chaque élément du tableau, on recréé la variable avec son contenu
				$$key = $value;
			}

			include("views/header.php");
			include("views/".$this->_contenu);
			include("views/footer.php");
		}
	
		
		
	}