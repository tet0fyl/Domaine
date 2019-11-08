<?php
	session_start();

	include("controllers/controller.php");
	include("models/manager_class.php");

	if (isset($_GET['controller'])){
			$strCtrl = $_GET['controller'];
	}else{
		$strCtrl = "evenement_actualite";
	}

	$strAction 	= (isset($_GET['action']))?$_GET['action']:"home";	

	// Si il y a deux controllers
	if(strpos($strCtrl,"_")==true){
		$strCtrl = explode("_",$_GET['controller'])[0];
		$strCtrl2 = explode("_",$_GET['controller'])[1];

		include("controllers/".$strCtrl2."_controller.php");

		$classeName2=$strCtrl2."_ctrl";
		$objController2 = new $classeName2;

		
		include("controllers/".$strCtrl."_controller.php");
	
		$classeName = $strCtrl."_ctrl";
	
		$objController = new $classeName;
		
		$parentController = new Controller;

		$parentController->display2Ctrl($objController,$objController2,$strAction);


	

	}else{
		
		include("controllers/".$strCtrl."_controller.php");
	
		$classeName = $strCtrl."_ctrl";
	
		$objController = new $classeName;
	

		$objController->$strAction();
	

	}
	