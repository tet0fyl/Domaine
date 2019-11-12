<?php

	class evenementManager extends manager{

		public function __construct(){
		//	parent::__construct();
		}
		
		public function getList($intLimit=NULL){	
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;

			return ["1" => [
				"id" => "1",
				"title" => "Essayages 1 : Mojo Sapiens / Oceya / DJ Batflec",
				"img" => "20191107.jpg",
				"date" => "07/11/2019",
				"content" => "Six Six et Le Domaine présentent :

				Essayages vol. 1 : 
				Concerts d'essai ultra-intimiste, sur inscription uniquement (limité à 33 entrées). 
				
				• Mojo Sapiens (Hip-Hop/Funk/Blues, Strasbourg)
				Premier essai live, projet avec des membres d'Art District, Leopard DaVinci et Dirty Deep.
				
				• Oceya (Glitch-Hop, Altkirch)
				Premier set live, ultime test avant Marbre / Fight the Ninja / Oceya.
				
				• DJ Batflec (P Records, Altkirch)
				
				—
				Jeudi 07 Novembre 2019 au Domaine - 27 avenue Foch à Altkirch.
				
				Ouverture des portes et Happy Hour : 19h00
				Début des concerts : 20h00
				Fin des concerts : 23h30
				Fermeture du Domaine : 00h30
				
				—
				GRATUIT, RÉSERVÉ AUX MEMBRES ANNUEL
				(Possibilité d'adhésion annuelle à Six Six au préalable, 10€ pour toute l'année).
				
				—
				L'événement est réservé aux membres de l'association Six Six.
				
				Parking gratuit à proximité, animaux, nourriture et boissons extérieurs ne sont pas tolérés.",
			],"2" => [
				"id" => "1",
				"title" => "BLIBLOUUUBEFSSDF",
				"img" => "20191114.jpg",
				"date" => "21/324/20191123",
				"content" => "Six Six et Le Domaine blibbwedewferdwtr :
				
				Parking gratuit à proximité, animaux, nourriture et boissons extérieurs ne sont pas tolérés."
			]];
		}
		
		public function get($intId){
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetch();
			//return $arrResult;
		}		
	}
	