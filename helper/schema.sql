Create database Savant ;
Use Savant ;
CREATE USER 'Savant'@'localhost' IDENTIFIED BY 'gtrnet';
GRANT ALL PRIVILEGES ON Savant.* TO 'Savant'@'localhost' WITH GRANT OPTION; 

<-- Table Questions -->

CREATE TABLE `Questions` (
	`IDQ` INT NOT NULL AUTO_INCREMENT,
	`Q` VARCHAR(150) NOT NULL,
    `A` VARCHAR(50) NOT NULL,
    `B` VARCHAR(50) NOT NULL,
    `C` VARCHAR(50) NOT NULL,
    `D` VARCHAR(50) NOT NULL,
    `R` VARCHAR(50) NOT NULL,
    `Image` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`IDQ`)
)ENGINE=InnoDB;

<-- Table Joueurs -->

CREATE TABLE `Joueurs` ;
    `IDJ` INT NOT NULL AUTO_INCREMENT,
    `Nom` VARCHAR(20) NOT NULL,
    `Prenom` VARCHAR(20) NOT NULL,
    `Classe` VARCHAR(20) NOT NULL,
    `Score` int(4) NOT NULL,
	PRIMARY KEY (`IDJ`)
)ENGINE=InnoDB;

<-- Table intermediaire -->
CREATE TABLE Intermediaire (
    `IDJI` INT(2) NOT NULL,
    `IDQI` int(2) NOT NULL
)ENGINE=InnoDB;
<-- Questions -->

INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quelle est la formule de la quantité de matière n ?','n = m/M','n = M/m','n = m*M','n = M+m','n = m/M', 'assets/images/question1.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Que signifie ce pictogramme :','Explosif', 'Comburant','Toxique','Inflammable', 'Inflammable', 'assets/images/question2.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quelle est la dérivé de 8x² ?','10x','16x', '4x','16x²','16x', 'assets/images/question3.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quel est le domaine de définition x:', 'R*','R+*','[0;+]','] 0;+[','R*', 'assets/images/question4.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quelle est la formule de la fréquence en fonction de la période ?','F = 1/T','F = 1/t','F = T/1','F = t/1','F = 1/T', 'assets/images/question5.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Compléter cette suite de chiffres (appelé suite de Fibonacci):  1 - 1 - 2 - 3 - 5 - 8 - …','11','12','13','14','13', 'assets/images/question6.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('De quel scientifique français nous vient la célèbre phrase “Rien ne se perd, rien ne se crée, tout se transforme.” ?','Albert Einstein','Marie Curie','Antoine Lavoisier','Blaise Pascal','Antoine Lavoisier', 'assets/images/question7.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quel est l’élément du tableau périodique symbolisé par “N” et qui, sous sa forme N2, compose près de 80% de notre atmosphère ?','Le dioxyde de carbone','L’azote','L’oxygène','L’Hélium','L’azote', 'assets/images/question8.png');  
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('À quoi est égal le sinus?', 'cos*tan', 'HypOpp','costan','-HypAdj','cos*tan', 'assets/images/question9.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Le polynôme du second degré suivant x2+9x +4 est:','Égale à (x+3)(x+2)','Positif à l’extérieur des racines','-3','-47','Positif à l’extérieur des racines', 'assets/images/question10.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quel scientifique a permis d’énormes progrès dans le domaine de l’astronomie au XVIIème siècle ?','Lavoisier','Rousseau','Newton','Galilée','Galilée', 'assets/images/question11.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quelle est l’unité du poid dans p=m*g ?','g','kg','N','N.Kg-1','N', 'assets/images/question12.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('A quoi correspond une longueur d’onde située en 400 nm et 800 nm ? ','Lumière visible','Infrarouge', 'Ultraviolet','Ondes radios','Lumière visible', 'assets/images/question13.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Dans le système international, la température doit être exprimé en: ','Degré Fahrenheit', 'Kalvin','Kelvin','Degré Celsius','Kelvin', 'assets/images/question14.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quelle est la formule de l’énergie cinétique ?','g*a2','12m*v2','14m*v3','12g*v2','12m*v2', 'assets/images/question15.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quelle est la formule des Gaz Parfait ?','PV=MRT','PV=nrT','PT=nRV','PV=nRT','PV=nRT', 'assets/images/question16.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Quel est le nom de ce scientifique ?','Isaac Newton','Albert Einstein','Pythagore','Descartes','Albert Einstein', 'assets/images/question17.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Dans ce circuit électrique, quelle est la puissance aux bornes de ce dipôle ?', '5W', '40W', '2000W', '0.2W', '5W', 'assets/images/question18.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('cos(0)=...?','1','0','2','3','1', 'assets/images/question19.png');
INSERT INTO Questions (Q,A,B,C,D,R, Image) VALUES ('Grâce à quel fruit Newton a-t-il découvert la gravité:','un ananas', 'une pêche', 'une pomme', 'une poire', 'une pomme', 'assets/images/question20.png');




