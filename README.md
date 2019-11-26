DOCUMENTATION
================
Objects
---------
* Evenements

| Methode        | Commentaire | 
| ------------- |:-------------:| 
| getId()      | return l'id |
| getTitle()      | return le titre |
| getImg()    | return l'image      |
| getDate() | return la date et l'heure au format YYYY-MM-DD HH:MM:SS|
| getFrenchDate() | return la date au format  DD/MM/YYYY|     
| getDay() | return le jour |
| getMonth() | return le mois en lettre |
| getHour() | return l'heure au format HH:MM:SS|
| getContent() | return le contenue  |
| getShortContent() | return le contenu limité à 300 char.  |
| getPrix() | return le prix  |
| getCancel() | return true si l'evenement est annulé  |
| getListGenreId() | return une chaine de char. concatenée par une virgule d' ID de genre musical  |
| getListGenreLibelle() | return une chaine de char. concatenée par une virgule de genres musical  |
| getPastEventStatus() | return true si l'event est passé  |

* Actualites

| Methode        | Commentaire | 
| ------------- |:-------------:| 
| getId()      | return l'id |
| getTitle()      | return le titre |
| getImg()    | return l'image      |
| getDate() | return la date et l'heure au format YYYY-MM-DD HH:MM:SS|
| getFrenchDate() | return la date au format  DD/MM/YYYY|     
| getDay() | return le jour |
| getMonth() | return le mois en lettre |
| getHour() | return l'heure au format HH:MM:SS|
| getContent() | return le contenue  |
| getShortContent() | return le contenu limité à 300 char.  |

* Presses

| Methode        | Commentaire | 
| ------------- |:-------------:| 
| getId()      | return l'id |
| getFichier()    | return l'image      |
| getDate()    | return l'image      |

* Medias

| Methode        | Commentaire | 
| ------------- |:-------------:| 
| getId()      | return l'id |
| getMedia()      | return le titre |

* Genre

| Methode        | Commentaire | 
| ------------- |:-------------:| 
| getId()      | return l'id |
| getLibelle()      | return le libelle |
| getSelected()    | return true si le filtre et appliqué |

Views
---------

Le tableau ci dessous présente les views objects utilisés dans les views principales :  

| Views        | Object View | 
| ------------- |:-------------:| 
| home.php     | views/object/home/evenement_object.php |
| home.php     | views/object/home/actualite_object.php |
| actualite.php     | views/object/own_page/actualite_object.php |
| evenement.php     | views/object/own_page/evenement_object.php |
| evenement.php     | views/object/own_page/genre_object.php |
| media.php     | views/object/own_page/media_object.php |
| presse.php     | views/object/own_page/presse_object.php |
| article seul     | views/object/single/evenement_object.php |
| article seul     | views/object/single/actualite_object.php |

Structure
---------

* controllers
   * *nomDuController_controller.php* -> assemble un model et une view.
* model
   * *nomDuModel_class.php* -> décrit un objet avec ses attributs et méthodes.
    
   * *nomDuModelManager_class.php* -> Requête MySQL liée à la table de l'objet.
    
    
