.. quiz documentation master file, created by
   sphinx-quickstart on Wed Jan  4 13:22:26 2023.
   You can adapt this file completely to your liking, but it should at least
   contain the root `toctree` directive.

Présentation du projet et sa documentation!
===========================================

.. toctree::
   :maxdepth: 2
   :caption: Contents:


Sommaire
========

* Explication projet
* Module PHP
* Variables Utilisées

Explication projet
==================

Problematique
-------------
Réaliser un site de quiz en ligne dans le but de départager 120 élèves.

Avec pour thèmes les Mathématique et la Physique-Chimie.



Demandes et contraintes
-----------------------
La collecte d'informations : 

#. Le Nom
#. Le Prénom 
#. La Classe

Le QCM devra avoir : 

#. 4 propositions de réponse à chaque question
#. 1 seule réponse de juste
#. 20 questions au total

L'annonce des resultat ce fait lorsque tout les joueurs ont terminée le quiz 

2 Classement : 

#. Un par joueur
#. L'autre par classe

Organisation projet
-------------------

Arborescence
~~~~~~~~~~~~

.. code-block::
 
   Quiz_Savant
    ├── AUTHORS
    ├── Documentation
    │   ├── cahier_des_charges_Quiz_Savant.pdf
    │   └── Guide_d'installation.pdf
    ├── helper
    │   ├── connection.php
    │   ├── header.php
    │   ├── rng.php
    │   ├── schema.sql
    │   └── session.php
    ├── html
    │   ├── accueil.php
    │   ├── admin.php
    │   ├── ajout_score.php
    │   ├── assets
    │   │   ├── images
    │   │   │   ├── logo2.png
    │   │   │   ├── logo_git.png
    │   │   │   ├── logo.png
    │   │   │   ├── question10.png
    │   │   │   ├── question11.png
    │   │   │   ├── question12.png
    │   │   │   ├── question13.png
    │   │   │   ├── question14.png
    │   │   │   ├── question15.png
    │   │   │   ├── question16.png
    │   │   │   ├── question17.png
    │   │   │   ├── question18.png
    │   │   │   ├── question19.png
    │   │   │   ├── question1.png
    │   │   │   ├── question20.png
    │   │   │   ├── question2.png
    │   │   │   ├── question3.png
    │   │   │   ├── question4.png
    │   │   │   ├── question5.png
    │   │   │   ├── question6.png
    │   │   │   ├── question7.png
    │   │   │   ├── question8.png
    │   |   │   └── question9.png
    │   │   ├── js
    │   │   │   ├── calcule_points.js
    │   │   │   ├── choix.js
    │   │   │   ├── comparaison_envoie.js
    │   │   │   └── jquery.min.js
    │   │   ├── style_accueil.css
    │   │   ├── style_admin.css
    │   │   ├── style_classement.css
    │   │   ├── style_classement_groupe.css
    │   │   ├── style_index.css
    │   │   └── style_question.css
    │   ├── classement_groupe.php
    │   ├── classement.php
    │   ├── index.php
    │   ├── logout_admin.php
    │   ├── logout.php
    │   └── question.php
    └── README.rst
    ...

Organisation Base de donnée
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Table Joueurs:

.. list-table:: Table Joueurs
   :widths: 100
   :header-rows: 1

   * - 'IDJ' INT NOT NULL AUTO INCREMENT
   * - 'Nom' VARCHAR(20) NOT NULL
   * - 'Prenom' VARCHAR(20) NOT NULL
   * - 'Classe' VARCHAR(20) NOT NULL
   * - 'Score' int(4) NOT NULL 

Cette table nous sert à stocker les informations du joueur notament son score afin d'établir le classement de fin de partie   


Table Questions:

.. list-table:: Table Questions
   :widths: 100
   :header-rows: 1

   * - 'IDJ' INT NOT NULL AUTO INCREMENT
   * - 'Q' VARCHAR(150) NOT NULL
   * - 'A' VARCHAR(50) NOT NULL
   * - 'B' VARCHAR(50) NOT NULL
   * - 'C' VARCHAR(50) NOT NULL
   * - 'D' VARCHAR(50) NOT NULL
   * - 'R' VARCHAR(50) NOT NULL
   * - 'Image' VARCHAR(100) NOT NULL

Cette table stocke les informations relative aux questions : les images associées à chaque question , la bonne reponse.

Table Intermédiaire:

.. list-table:: Table Intermédiaire
   :widths: 100
   :header-rows: 1

   * - 'IDJI' INT(2) NOT NULL
   * - 'IDQI' INT(2) NOT NULL

Cette table est utilisée pour générer une question aléatoire.






Module PHP / Code
=================

Nous avons principalement utilisé le language PHP pour ce projet
que l'on a agrémenter de HTML et de CSS .

Nous avons utilisé mariaDB comme base de donnée.

le site peut hébergé sur une adresse en ligne et donc être accessible de partout

Initiation de la connexion
--------------------------

Dans ce code nous recuperons les informations données sur la première page .
On envoie une requête vers la BDD pour alimenter la table Joueur .
On ajoute aussi les informations à $_SESSION et on vérifie la connection.

.. code-block:: php

    <?php 
        /* Requete pour inserer les données dans la database */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Nom=$_POST['nom'];
            $Prenom=$_POST['prenom'];
            $Classe=$_POST['classe'];
            $Score= '0';
            
            $query = $pdo->prepare("INSERT INTO Joueurs (Prenom, Nom, Classe, Score) 
            VALUES (:Prenom, :Nom, :Classe, :Score)");
            $success = $query->execute([
                  "Nom" => $Nom,
                  "Prenom" => $Prenom,
                  "Classe" => $Classe,
                  "Score" => $Score,
            ]);

            if($success){
            echo "Le joueur a bien été ajouter !";
            session_start();
            /* On met le prenom et le nom dans une variable de Session */
            $_SESSION['logon'] = true;
            $_SESSION['Prenom'] = $Prenom;
            $_SESSION['Nom'] = $Nom;
            }else {
                $error = $query->errorInfo()[2];
                echo "Erreur : $error \n";
            }
        }?>

        /* Verification de la connection */
        <?php if(isset($_SESSION['logon']) && $_SESSION['logon'] === true): ?>
            <?php header('Location: /accueil.php');
            die();
            ?>
    ...


Récupération de l'id session
------------------------------

On utilise session_id() pour récupérer l'id de session s'il existe.
Si l'id de session n'existe  pas, session_id() renvoie une chaine
de caractères.

.. code-block:: php

    <?php
    session_start();
     
     /* Recupere le nom et le prenom du joueur*/
    $nom = $_SESSION['Nom'];
    $prenom = $_SESSION['Prenom'];
    
    /* Requete sql pour recuperer l'IDJ en focntion de son nom et prenom*/
    $query = $pdo->prepare("SELECT IDJ FROM Joueurs WHERE Nom = :nom AND Prenom = :prenom");
       
    /* Execute la commande sql*/
    $query->execute([
       "nom" => $nom,
       "prenom" => $prenom
    ]);
     
    $player = $query->fetch();
    $IDJ = $player['IDJ']; ?>
    
    ...








Déconnexion
------------
Pour la déconnexion on détruit la session puis on redirige l'utilisateur vers la page de connexion. 

.. code-block:: php


    <?php
      /*  Détruire la session */
      if(session_destroy())
      {
        /* Redirection vers la page de connexion */
        session_destroy();
        header("Location: index.php");
      }
    ?>

    ...



Connexion à la base de donnée
-----------------------------


.. code-block:: php


    <?php $pdo = new PDO('mysql:host=127.0.0.1;dbname=Savant', 'Savant', 'gtrnet'); ?>



    ...

Ajout du score
---------------

.. code-block:: php

    <?php require '../helper/connection.php'; ?>
    <?php 
        $points = $_POST['vitesse'];
        $score = $points;
        $id=1;
    
        // Préparation de la requête
        $sql = $pdo->prepare("UPDATE Joueurs SET Score = score + $score WHERE IDJ = $id");
    
        // Exécution de la requête
        $sql->execute()
        
        ?>

    ...

Code Java Points
----------------


.. code-block::
    
    
    let points = 101; /* déclare une variable "points" avec une valeur initiale de 101*/
    let vitesse = ""; /* déclare une variable "vitesse" qui est initialisée vide*/
    
    /* déclare une fonction "decreasePoints" qui décrémente la valeur de la variable "points" de 1 à chaque appel*/
      function decreasePoints() {
         points--;
      }
      
       /* utilise la fonction setInterval pour appeler la fonction "decreasePoints" toutes les 300 millisecondes*/
          setInterval(decreasePoints, 300);
    
    ...

Ce code nous permet d'établir la valeur des points ici plus on répond rapidement et plus on a de point avec un algoritme qui décremente les points en fonction du temps 



Classes / Variables   utilisées
=================================

:ref:`$_SESSION<session>`
-------------------------


:ref:`Joueur<class>`
---------------------


:ref:`Question<question>`
-------------------------
