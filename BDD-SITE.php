<!--
Creer BDD:

Table livre : 
    id (int autoincrement) - PK
    titre (varchar (255))
    auteur (varchar (255))
    prix (decimal (4, 2))
    image_url (varchar (255))

Table utilisateur : 
    id (int autoincrement) - PK
    nom (varchar (255))
    email (varchar (255))
    mot_de_passe (varchar (255))
    admin (bool)

Table panier : 
    id (int autoincrement) - PK
    utilisateur_id (int) - FK (-> utilisateur(id))
    livre_id (int) - FK (-> livre(id))
    quantite (int)

Table commande : 
    id (int autoincrement) - PK
    panier_id (int) - FK (-> panier(id))
    date_commande (datetime)
    est_commandé (bool)

-->

