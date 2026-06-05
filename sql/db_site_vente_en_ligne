create database if not exists 'db_site_vente_en_ligne';
use 'db_site_vente_en_ligne';


create table if not exists 'livre' (
    id_livre int not null auto_increment,
    titre varchar(255) not null,
    prix decimal(4, 2) not null,
    img_url varchar(255) not null,
    est_a_la_une boolean,
    date_publication date,
    constraint pk_livre primary key (id_livre)
);

create table if not exists 'description_livre' (
    id_description int not null auto_increment,
    id_livre int not null,
    txt_description text,
    txt_description2 text,
    txt_resume text,
    constraint pk_description primary key (id_description),
    constraint fk_livre_description foreign key (id_livre) references livre(id_livre)
);

create table if not exists 'utilisateur' (
    id_utilisateur int auto_increment,
    nom varchar(255) not null,
    prenom varchar(255) not null,
    email varchar(255) not null unique,
    mot_de_passe varchar(255) not null,
    constraint pk_utilisateur primary key (id_utilisateur)
);

create table if not exists 'panier' (
    id_panier int not null auto_increment,
    id_utilisateur int not null,
    id_livre int not null,
    quantite int default 1,
    constraint pk_panier primary key (id_panier),
    constraint uq_utilisateur_livre unique (id_utilisateur, id_livre),
    constraint fk_utilisateur_panier foreign key (id_utilisateur) references utilisateur(id_utilisateur),
    constraint fk_livre_panier foreign key (id_livre) references livre(id_livre)
);

create table if not exists 'commande' (
    id_commande int not null auto_increment,
    id_panier int not null,
    est_commandee boolean default false,
    date_commande date,
    constraint pk_commande primary key (id_commande),
    constraint fk_panier_commande foreign key (id_panier) references panier(id_panier)
);


-- region #constraints

CREATE TRIGGER check_est_a_la_une_insert BEFORE INSERT ON livre
FOR EACH ROW
BEGIN
    IF NEW.est_a_la_une = 1 THEN
        IF (SELECT COUNT(*) FROM livre WHERE est_a_la_une = 1) >= 3 THEN
            SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = "Il est impossible d'avoir plus de 3 livres à la une";
        END IF;
    END IF;
END;

CREATE TRIGGER check_est_a_la_une_update BEFORE UPDATE ON livre
FOR EACH ROW
BEGIN
    IF NEW.est_a_la_une = 1 AND OLD.est_a_la_une = 0 THEN
        IF (SELECT COUNT(*) FROM livre WHERE est_a_la_une = 1) >= 3 THEN
            SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = "Il est impossible d'avoir plus de 3 livres à la une";
        END IF;
    END IF;
END;

-- #endregion