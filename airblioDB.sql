DROP TABLE IF EXISTS responsabletechnique ;
DROP TABLE IF EXISTS affectationmateriel;
DROP TABLE IF EXISTS affectationequipe;
DROP TABLE IF EXISTS intervention ;
DROP TABLE IF EXISTS siteintervention;
DROP TABLE IF EXISTS intervenant;
DROP TABLE IF EXISTS equipeintervention;
DROP TABLE IF EXISTS base;
DROP TABLE IF EXISTS materiel ;
DROP TABLE IF EXISTS localisation;





CREATE TABLE intervenant
(
 intervenant_id INT NOT NULL AUTO_INCREMENT,
 nom      	VARCHAR(50) NOT NULL,
 prenom   	VARCHAR(50) NOT NULL,
 email		VARCHAR(50) NOT NULL,
 password 	VARCHAR(50) NOT NULL,
 equipe_id  INT, 		

 CONSTRAINT intervenant_id PRIMARY KEY (intervenant_id)

 )ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE responsabletechnique
(
 responsable_technique_id INT NOT NULL AUTO_INCREMENT, 
 nom      	VARCHAR(50) NOT NULL,
 prenom   	VARCHAR(50) NOT NULL,
 email		VARCHAR(50) NOT NULL,
 password 	VARCHAR(50) NOT NULL,

 CONSTRAINT responsable_technique_id_pk PRIMARY KEY (responsable_technique_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE materiel
(
 materiel_id    	  INT NOT NULL AUTO_INCREMENT,
 libelle_materiel     INT NOT NULL,
 localisation_id	  INT NOT NULL,
 quantite			  INT NOT NULL,

 
 CONSTRAINT materiel_id_pk PRIMARY KEY (materiel_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE localisation
(
 localisation_id    INT NOT NULL AUTO_INCREMENT,
 longitude     		DOUBLE NOT NULL,
 latitude			DOUBLE NOT NULL,

 
 CONSTRAINT localisation_id PRIMARY KEY (localisation_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE base
(
 base_id    		INT NOT NULL AUTO_INCREMENT,
 nom_base     		VARCHAR(50) NOT NULL,
 localisation_id	INT NOT NULL,

 
 CONSTRAINT base_id PRIMARY KEY (base_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE siteintervention
(
 site_intervention_id    INT NOT NULL AUTO_INCREMENT,
 nom_site     			 VARCHAR(50) NOT NULL,
 profondeur				 DOUBLE,
 condition_site			 VARCHAR(255),
 localisation_id	  	 INT NOT NULL,

 
 CONSTRAINT site_intervention_id_pk PRIMARY KEY (site_intervention_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE affectationmateriel
(
 affectation_materiel_id   INT NOT NULL AUTO_INCREMENT,
 intervention_id    	   INT NOT NULL,
 materiel_id     		   INT NOT NULL,
 
 CONSTRAINT affectation_materiel_id_pk PRIMARY KEY (affectation_materiel_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE affectationequipe
(
 affectation_equipe_id 			INT NOT NULL AUTO_INCREMENT,
 intervention_id    			INT NOT NULL,
 equipe_intervention_id     	INT NOT NULL,
 
 CONSTRAINT affectation_equipe_id_pk PRIMARY KEY (affectation_equipe_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE equipeintervention
(
 equipe_intervention_id	   INT NOT NULL AUTO_INCREMENT,
 nom_equipe    			   VARCHAR(50) NOT NULL,
 localisation_id		   INT,
 
 CONSTRAINT equipe_intervention_id_pk PRIMARY KEY (equipe_intervention_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE intervention
(
 intervention_id	INT NOT NULL AUTO_INCREMENT,
 client    			VARCHAR(50),
 site_intervention_id INT,
 date_debut	DATE NOT NULL,
 date_fin DATE NOT NULL,

 CONSTRAINT intervention_id_pk PRIMARY KEY (intervention_id)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;






ALTER TABLE materiel 
ADD CONSTRAINT materiel_localisation_fk FOREIGN KEY (localisation_id) 
REFERENCES localisation (localisation_id);

ALTER TABLE siteintervention 
ADD CONSTRAINT site_intervention_localisation_fk FOREIGN KEY (localisation_id) 
REFERENCES localisation (localisation_id);

ALTER TABLE base 
ADD CONSTRAINT base_localisation_fk FOREIGN KEY (localisation_id) 
REFERENCES localisation (localisation_id);

ALTER TABLE intervenant 
ADD CONSTRAINT equipe_id_fk FOREIGN KEY (equipe_id) 
REFERENCES equipeintervention (equipe_intervention_id);

ALTER TABLE affectationmateriel 
ADD CONSTRAINT intervention_affectation_materiel_fk FOREIGN KEY (intervention_id) 
REFERENCES intervention (intervention_id);


ALTER TABLE affectationmateriel 
ADD CONSTRAINT materiel_affectation_materiel_id_fk FOREIGN KEY (materiel_id) 
REFERENCES materiel (materiel_id);

ALTER TABLE affectationequipe -- OU indisponibilité ?
ADD CONSTRAINT intervention_affectation_equipe_id_fk FOREIGN KEY (intervention_id) 
REFERENCES intervention (intervention_id);


ALTER TABLE affectationequipe 
ADD CONSTRAINT equipe_affectation_equipe_id_fk FOREIGN KEY (equipe_intervention_id) 
REFERENCES equipeintervention (equipe_intervention_id);


ALTER TABLE equipeintervention 
ADD CONSTRAINT equipe_intervention_localisation_id_fk FOREIGN KEY (localisation_id) 
REFERENCES localisation (localisation_id);

ALTER TABLE intervention 
ADD CONSTRAINT intervention_site_id_fk FOREIGN KEY (site_intervention_id) 
REFERENCES siteintervention (site_intervention_id);





-- INSERT

INSERT INTO `intervenant` (`nom`, `prenom`, `email`, `password`) VALUES
('Fanton', 'Corentin', 'corentin.fanton@dauphine.eu', 'password'),
('Etienne', 'Jean', 'etienne.jean@dauphine.eu', 'password'),
('Arzur', 'Samuel', 'samuel.arzur@dauphine.eu', 'password'),
('Ait-mouloud', 'Lisa', 'aitmouloud.lisa@dauphine.eu', 'password');


INSERT INTO `localisation`(`longitude`, `latitude`) VALUES 
(-2.2321610089416026,46.75224359162925),
(-1.930954168519179,46.60146452683979),
(3.536298220910112, 43.1555354668254),
(4.558026736535112, 43.34158897971621),
(8.535077517785112, 41.02180006720577),
(5.309225921761595, 43.35456492603143),
(-0.7332545469884053, 44.83778110653671),
(-4.490578765738405, 48.377163627527814); 



INSERT INTO `materiel`(`libelle_materiel`,`localisation_id`,`quantite`) VALUES
('AIRBLIOBASE', 6, 30),
('AIRBLIOSONAR', 3, 5),
('AIRBLIOSOUDURE', 1, 6),
('AIRBLIOSCANNER', 7, 3),
('AIRBLIOMICROSCOPEB', 8,2);

INSERT INTO `equipeintervention`(`nom_equipe`,`localisation_id`) VALUES
('Equipe 1', 1),
('Equipe 2', 2),
('Equipe 3', 3);

INSERT INTO `siteintervention`(`nom_site`,`profondeur`,`condition_site`,`localisation_id`) VALUES
('site A', 50, 'bonne condition blablabla', 1),
('site B', 30, 'bonne condition blablabla', 2),
('site C', 50, 'bonne condition blablabla', 3),
('site D', 100, 'bonne condition blablabla', 4),
('site E', 57, 'bonne condition blablabla', 5);

INSERT INTO `base`(`nom_base`,`localisation_id`) VALUES 
('Base Marseille', 6),
('Base Bordeaux', 7),
('Base Brest', 7);


INSERT INTO `responsabletechnique`(`nom`,`prenom`,`email`, `password`) VALUES
('Respotek', 'Jean', 'jeanadmin@gmail.com', 'password');

INSERT INTO `intervention`(`client`, `site_intervention_id`, `date_debut`, `date_fin`) VALUES
('Client A', 1, '2019-04-02', '2019-04-17'),
('Client A', 2, '2019-05-02', '2019-05-17'),
('Client A', 3, '2019-06-02', '2019-06-17');
