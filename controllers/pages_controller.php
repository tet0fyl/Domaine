<?php
	/** Controller permettant de gérer les pages **/
	class pages_ctrl extends controller{

		public function __construct(){
			parent::__construct();
		}
		
		public function contact(){
			$data['page']	= 'contact';
			$this->_contenu = "contact.php";
			$this->display($data);
		}
	}