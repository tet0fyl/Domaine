#------------------------------------------------------------
#        Script Injection MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Injection Table: Evenements
#------------------------------------------------------------


INSERT INTO Evenements (titre_evenement,date_heure_evenement,contenu_evenement,prix_evenement,cancel_evenement,affiche_evenement) VALUES
        ('Marbre / Fight the Ninja / Oceya','2019-12-07 19:00:00',"Samedi 7 Décembre 2019 au Domaine - 27 avenue Foch à Altkirch.

                                                                Ouverture des portes et Happy Hour : 19h00
                                                                Début des concerts : 20h00
                                                                Fin des concerts : 00h00
                                                                Fermeture du Domaine : 00h30
                                                                L'événement est réservé aux membres de l'association Six Six.
                                                                MEMBRE ANNUEL : 3€.
                                                                Parking gratuit à proximité, animaux, nourriture et boissons extérieurs ne sont pas tolérés",
                                                                '6','0','20191207.jpg'),
        ('The Sheldons / The Lucky Skankers / King Zion Sound', '2019-12-21 19:00:00',"Samedi 21 Décembre 2019 au Domaine - 27 avenue Foch à Altkirch.

                                                                Ouverture des portes et Happy Hour : 19h00
                                                                Début des concerts : 20h00
                                                                Fin des concerts : 00h00
                                                                Fermeture du Domaine : 00h30
                                                                L'événement est réservé aux membres de l'association Six Six.
                                                                MEMBRE ANNUEL : 3€.
                                                                Parking gratuit à proximité, animaux, nourriture et boissons extérieurs ne sont pas tolérés",
                                                                '6','0','20191221.jpg'),
        ('Aperolectro - Meets The Domaine SPECIAL AFTER DE LA SAINTE-CATHERINE','2019-11-21 18:00:00',"Jeudi 21 Novembre 2019 au Domaine - 27 av. Foch à Altkirch.

                                                                Fin de la foire et Ouverture du Domaine : 18H00
                                                                Début des sets : 18H30
                                                                Fin des sets : 01H30
                                                                Fermeture du Domaine : 02H00
                                                                L'événement est réservé aux membres de l'association Six Six.
                                                                MEMBRE ANNUEL : 3€.
                                                                Parking gratuit à proximité, animaux, nourriture et boissons extérieurs ne sont pas tolérés",
                                                                '6','0','20191121.jpg'),
        ('Essayages 1 : Mojo Sapiens / Oceya / DJ Batflec','2019-11-07 19:00:00',"Jeudi 07 Novembre 2019 au Domaine - 27 av. Foch à Altkirch.

                                                                Ouverture des portes et Happy Hour : 19h00
                                                                Début des concerts : 20h00
                                                                Fin des concerts : 00h00
                                                                Fermeture du Domaine : 00h30
                                                                L'événement est réservé aux membres de l'association Six Six.
                                                                MEMBRE ANNUEL : 3€.
                                                                Parking gratuit à proximité, animaux, nourriture et boissons extérieurs ne sont pas tolérés",
                                                                '6','0','20191107.jpg'),
        ('Aperolectro Meets le Domaine Special Halloween','2019-10-31 19:00:00',"Jeudi 31 Octobre 2019 au Domaine - 27 av. Foch à Altkirch.

                                                                Ouverture du Domaine et Début des sets : 19H00
                                                                Fin des sets : 01H00
                                                                Fermeture du Domaine : 01H30
                                                                ** P.A.F. : offerte aux gens déguisés**
                                                                P.A.F. : 3€ adhésion journalière incluse.
                                                                L'événement est réservé aux membres de l'association Six Six.
                                                                MEMBRE ANNUEL : 3€.
                                                                Parking gratuit à proximité, animaux, nourriture et boissons extérieurs ne sont pas tolérés",
                                                                '3','0','20191031.jpg');


#------------------------------------------------------------
# Injection Table : Newsletters
#------------------------------------------------------------

INSERT INTO Newsletters VALUES
        (NULL,"theophile.braye@gmail.com"),
        (NULL,"momo@gmail.com"),
        (NULL,"sephora@gmail.com"),
        (NULL,"toto@gmail.com");


#------------------------------------------------------------
# Injection Table: Presses
#------------------------------------------------------------

INSERT INTO Presses VALUES
        (NULL,"SixSix-1er-Mai-2019.pdf","2019-05-01"),
        (NULL,"SixSix-Automne-2019.pdf","2019-10-01"),
        (NULL,"SixSix-Avril-2019.pdf","2019-07-01"),
        (NULL,"SixSix-Halle-au-ble-novembre-2019.pdf","2019-11-01"),
        (NULL,"SixSix-Juin-2019.pdf","2019-07-01"),
        (NULL,"SixSix-PACK-Halle-au-ble-novembre-2019.zip","2019-07-01"),
        (NULL,"SixSix-Weekend-Toussaint-2019.pdf","2019-10-01");


#------------------------------------------------------------
# Injection Table: Actualites
#------------------------------------------------------------

INSERT INTO Actualites VALUES 
        (NULL,"Merci à tous, on a ramassé vos mégots et consolé l'herbe restante, tout vas bien.",
        "Une fois de plus vous avez été nombreuses et nombreux à répondre présent à notre petite festivité jardinière pré-rentrée ;
        incroyable d'avoir rempli à ce point notre modeste jardin ! 
        Merci (et surtout bravo) à Smashing Train qui ont ouvert le bal et trouvé le nom de notre sainte bière : La Belle Croix (Bière Blonde Bio IPA à 6,6% concoctée par la Brasserie Artisanale des 4 Pays d'Hirtzbach).
        Un immense merci à Bad Juice et Electrik Yakuza qui ont complètement foutu le feu au Jardin histoire de laisser un sol amazonien à nos stars haut-rhinoises de The Hook. 
        Un grand merci aussi et surtout à ce staff d'exception qui s'est dépassé une fois de plus, s'efforçant sans relâche à vous accueillir dans les meilleurs conditions possible. 
        Puis merci à nos voisins qui eux aussi se sont montrés patients, non loin de leur poste téléphonique, espérant un rappel de la Marie ou de la Gendarmerie (certains attendent encore me dit-on). 
        On se retrouve pour notre Out of Office mensuel jeudi 12 septembre à 18H06. Aussi, dès demain vous découvrirez le programme de ces prochains mois s'annonçant déjà un peu plus 'rentre-dedans'.",
        "2019-09-02", "20190902.jpg"),
        (NULL,"On vous l'a dit, 'la pluie, même pas peur'.",
        "Quand certains se noient sous la pluie, d'autres y nagent. 
        Un grand merci à vous toutes et tous d'être venu partager ce concert au Domaine. 
        Par votre présence, vous avez su nous offrir un moment d'intense chaleur humaine à quelques jours du solstice d'été. Merci également à notre Staff de plus en plus redoutable dans son organisation ;
        Et le plus important, merci à Billy Mays Band et Philip Pentacle d'avoir si parfaitement ouvert les festivités et surtout à Leopard DaVinci pour vous avoir rendu si démoniaque ; l'illustration parfaite d'un Boire/Bière/Brûler/Village ! 
        Vraiment, du fond du cœur merci de faire vivre Altkirch par votre présence ! Continuons ainsi... 
        On se retrouve vendredi 21 Juin dès 23H00 pour Aperolectro Meets le Domaine (Special After Fête de la Musique), et on va voir ce que sa veut dire 'une soirée bouillante'.",
        "2019-06-18","20190618.jpg");


#------------------------------------------------------------
# Injection Table: Medias
#------------------------------------------------------------

INSERT INTO Medias VALUES
        (NULL,"01.jpg"),
        (NULL,"02.jpg"),
        (NULL,"03.jpg"),
        (NULL,"04.jpg"),
        (NULL,"05.jpg"),
        (NULL,"06.jpg"),
        (NULL,"07.jpg");

#------------------------------------------------------------
# Injection Table: Administrateurs
#------------------------------------------------------------

INSERT INTO Administrateurs VALUES
        (NULL, "admin", "admin");

#------------------------------------------------------------
# Injection Table: Genres
#------------------------------------------------------------

INSERT INTO Genres VALUES
        (NULL, "Rock"),
        (NULL, "Electro"),
        (NULL, "Rap"),
        (NULL, "Metal"),
        (NULL, "Jazz");

#------------------------------------------------------------
# Injection Table: TypeEvenement
#------------------------------------------------------------

INSERT INTO TypeEvenement values
        (2,1),(2,3),(1,2),(2,4),(2,5);