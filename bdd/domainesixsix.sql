#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Evenements
#------------------------------------------------------------

CREATE TABLE Evenements(
        id_evenement         Int  Auto_increment  NOT NULL ,
        titre_evenement      Varchar (200) NOT NULL ,
        date_heure_evenement Datetime NOT NULL ,
        contenu_evenement    Varchar (500) NOT NULL ,
        prix_evenement       Float NOT NULL ,
        cancel_evenement     Bool NOT NULL ,
        affiche_evenement    Varchar (250) NOT NULL
	,CONSTRAINT Evenements_PK PRIMARY KEY (id_evenement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Newsletters
#------------------------------------------------------------

CREATE TABLE Newsletters(
        id_newsletter   Int  Auto_increment  NOT NULL ,
        mail_newsletter Varchar (200) NOT NULL
	,CONSTRAINT Newsletter_PK PRIMARY KEY (id_newsletter)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Presses
#------------------------------------------------------------

CREATE TABLE Presses(
        id_presse          Int  Auto_increment  NOT NULL ,
        nom_fichier_presse Varchar (500) NOT NULL ,
        date_presse        Date NOT NULL
	,CONSTRAINT Presse_PK PRIMARY KEY (id_presse)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Actualites
#------------------------------------------------------------

CREATE TABLE Actualites(
        id_actualite      Int  Auto_increment  NOT NULL ,
        titre_actualite   Varchar (200) NOT NULL ,
        contenu_actualite Varchar (500) NOT NULL ,
        date_actualite    Date NOT NULL ,
        affiche_actualite Varchar (250) NOT NULL
	,CONSTRAINT Actualites_PK PRIMARY KEY (id_actualite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Medias
#------------------------------------------------------------

CREATE TABLE Medias(
        id_media Int  Auto_increment  NOT NULL ,
        media    Varchar (255) NOT NULL
	,CONSTRAINT Media_PK PRIMARY KEY (id_media)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Administrateurs
#------------------------------------------------------------

CREATE TABLE Administrateurs(
        id_admin          Int  Auto_increment  NOT NULL ,
        identifiant_admin Varchar (255) NOT NULL ,
        password_admin    Varchar (255) NOT NULL
	,CONSTRAINT Administrateur_PK PRIMARY KEY (id_admin)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genres
#------------------------------------------------------------

CREATE TABLE Genres(
        id_genre Int  Auto_increment  NOT NULL ,
        libele   Varchar (255) NOT NULL
	,CONSTRAINT Genres_PK PRIMARY KEY (id_genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TypeEvenement
#------------------------------------------------------------

CREATE TABLE TypeEvenement(
        id_genre     Int NOT NULL ,
        id_evenement Int NOT NULL
	,CONSTRAINT TypeEvenement_PK PRIMARY KEY (id_genre,id_evenement)

	,CONSTRAINT TypeEvenement_Genres_FK FOREIGN KEY (id_genre) REFERENCES Genres(id_genre)
	,CONSTRAINT TypeEvenement_Evenements0_FK FOREIGN KEY (id_evenement) REFERENCES Evenements(id_evenement)
)ENGINE=InnoDB;

