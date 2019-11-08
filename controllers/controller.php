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
	
		public function display2Ctrl($Strctrl1, $Strctrl2,$StrAction) {
			// Le tableau des variables ($data) est parcouru
			

			$data['page']	= $StrAction;		
			
			$this->_contenu = $StrAction.".php";
			
			$Strctrl1->$StrAction($data);
			$Strctrl2->$StrAction($data);

			print_r($data);
			include("views/header.php");
			include("views/".$this->_contenu);
			include("views/footer.php");
		}
		
		
	}