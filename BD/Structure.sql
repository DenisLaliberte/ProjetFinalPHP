DROP TABLE administrateur;
DROP TABLE text;
DROP TABLE employe;
DROP TABLE poste;
DROP SEQUENCE administrateur_id;
DROP SEQUENCE text_id;
DROP SEQUENCE employes_id;
DROP SEQUENCE poste_id;


CREATE TABLE administrateur(
	id number,
	nom varchar2(30) UNIQUE,
	mot_de_passe varchar2(40),
	CONSTRAINT pk_Administrateur PRIMARY KEY (id)
);

CREATE TABLE text(
--texte pour la page d'acceuil, 
--la description de la compagnie
--la description des services
	id number,
	page varchar2(30) UNIQUE,
	contenu varchar2(2000),
	CONSTRAINT pk_text PRIMARY KEY (id)
);
CREATE TABLE employe(
	id number,
	nom varchar2(30),
	description varchar2(1000),
	chemin_photo varchar2(60),
	CONSTRAINT pk_employe PRIMARY KEY (id)
);

CREATE TABLE poste(
	id number,
	nom varchar2(30),
	description varchar2(1000),
	date_daffichage date,
	CONSTRAINT pk_poste PRIMARY KEY (id)
);
CREATE SEQUENCE administrateur_id;
CREATE SEQUENCE text_id;
CREATE SEQUENCE employes_id;
CREATE SEQUENCE poste_id;
