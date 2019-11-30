<?php
	session_start();
	if(isset($_SESSION['admin']) && $_SESSION['admin']){
	    echo "<h1>Vous êtes Admin</h1>";
    }


    define('WEBROOT', dirname( __FILE__ ));
	include("controllers/controller.php");
	include("models/manager_class.php");



        $strCtrl 	= (isset($_GET['controller']))?$_GET['controller']:"home";
        $strAction 	= (isset($_GET['action']))?$_GET['action']:"home";

		
		include("controllers/".$strCtrl."_controller.php");
		$classeName = $strCtrl."_ctrl";
		$objController = new $classeName;
		$objController->$strAction();
	

