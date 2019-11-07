<?php
	class manager{

		protected $_db;
		
		public function __construct(){
			try{
				// Connexion à la base de données
				$this->_db = new PDO("mysql:host=localhost;dbname=blog", "root", ""); 

				// Configuration des exceptions
				$this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// Configuration FETCH_ASSOC
				$this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				// Encodage UTF-8
				$this->_db->exec("SET NAMES UTF8");
			} catch(Exception $e) { 
				echo "Échec : " . $e->getMessage(); 
			}
		}
	}
