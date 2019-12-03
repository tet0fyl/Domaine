<?php
	session_start();

	include("controllers/controller.php");
	include("models/manager_class.php");



        $strCtrl 	= (isset($_GET['controller']))?$_GET['controller']:"home";
        $strAction 	= (isset($_GET['action']))?$_GET['action']:"home";

		
		include("controllers/".$strCtrl."_controller.php");
		$classeName = $strCtrl."_ctrl";
		$objController = new $classeName;
		$objController->$strAction();
	

