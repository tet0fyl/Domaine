<?php

	class actualiteManager extends manager{

		public function __construct(){
			//parent::__construct();
		}
		
		public function getList($intLimit=NULL){	
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;
			//$data = [];
			
			//return $data;

            return ["1" => ["id" => "1",
                            "title" => "Merci à tous, on a ramassé vos mégots et consolé l'herbe restante, tout vas bien.",
                            "content" => "Une fois de plus vous avez été nombreuses et nombreux à répondre présent à notre petite festivité jardinière pré-rentrée ;
        incroyable d'avoir rempli à ce point notre modeste jardin ! 
        Merci (et surtout bravo) à Smashing Train qui ont ouvert le bal et trouvé le nom de notre sainte bière : La Belle Croix (Bière Blonde Bio IPA à 6,6% concoctée par la Brasserie Artisanale des 4 Pays d'Hirtzbach).
        Un immense merci à Bad Juice et Electrik Yakuza qui ont complètement foutu le feu au Jardin histoire de laisser un sol amazonien à nos stars haut-rhinoises de The Hook. 
        Un grand merci aussi et surtout à ce staff d'exception qui s'est dépassé une fois de plus, s'efforçant sans relâche à vous accueillir dans les meilleurs conditions possible. 
        Puis merci à nos voisins qui eux aussi se sont montrés patients, non loin de leur poste téléphonique, espé",
                            "date" => "2019-09-02",
                            "img" => "20190902.jpg"],
                "2" => ["id" => "2",
                    "title" => "On vous l'a dit, 'la pluie, même pas peur'.",
                    "content" => "Quand certains se noient sous la pluie, d'autres y nagent. 
        Un grand merci à vous toutes et tous d'être venu partager ce concert au Domaine. 
        Par votre présence, vous avez su nous offrir un moment d'intense chaleur humaine à quelques jours du solstice d'été. Merci également à notre Staff de plus en plus redoutable dans son organisation ; 
        Et le plus important, merci à Billy May",
                    "date" => "2019-06-18",
                    "img" => "20190618.jpg"]];
		}
		
		public function get($intId){
			//$strQuery =
			//$query 		= $this->_db->query($strQuery);
			//$arrResult 	= $query->fetchAll();
			//return $arrResult;
		}		
	}
	