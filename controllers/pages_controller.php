<?php
	/** Controller permettant de gérer les pages **/
	class pages_ctrl extends controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function contact(){
			$data['page']	= 'infos';
			$this->_contenu = "infosPratiques.php";
			$this->display($data);
		}
	}