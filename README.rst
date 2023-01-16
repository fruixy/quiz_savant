=========================================
SAE 302 Quiz Savant
=========================================

.. image:: https://github.com/fruixy/quiz_savant/blob/master/html/assets/images/logo_git.png?raw=true
      :align: center

####

Description
===========

- Site web pour tester votre niveau en physique
- Dévélopper à la demande__ des BUT Mesures Physiques

   __ https://github.com/fruixy/quiz_savant/tree/master/Documentation/cahier_des_charges_Quiz_Savant.pdf

####

Installation
===========

- Suivez le tutoriel d'installation__
- serveur conseillé : Apache
- Base de donnée conseillé : MySQL

   __ https://github.com/fruixy/quiz_savant/tree/master/Documentation/Guide_d'installation.pdf

####

Téléchargement
==============

- Cliquez ici__ pour télécharger la version linux en .zip
   __ https://github.com/fruixy/quiz_savant/archive/refs/heads/master.zip


####

Documentation
=================

- Analyse de notre code via une page web à l'aide de sphinx
- Répartition__ des tâches
__ https://github.com/users/fruixy/projects/3/views/5?groupedBy%5BcolumnId%5D=Assignees
  
  
####

Arborescence
============
::

      Quiz_Savant
      ├── AUTHORS
      ├── Documentation
      │   ├── cahier_des_charges_Quiz_Savant.pdf
      │   ├── Guide_d'installation.pdf
      │   └── sphinx
      │       ├── build
      │       │   ├── doctrees
      │       │   │   ├── class.doctree
      │       │   │   ├── environment.pickle
      │       │   │   ├── index.doctree
      │       │   │   ├── question.doctree
      │       │   │   └── session.doctree
      │       │   └── html
      │       │       ├── class.html
      │       │       ├── genindex.html
      │       │       ├── index.html
      │       │       ├── objects.inv
      │       │       ├── question.html
      │       │       ├── search.html
      │       │       ├── searchindex.js
      │       │       ├── session.html
      │       │       ├── _sources
      │       │       │   ├── class.rst.txt
      │       │       │   ├── index.rst.txt
      │       │       │   ├── question.rst.txt
      │       │       │   └── session.rst.txt
      │       │       └── _static
      │       │           ├── basic.css
      │       │           ├── css
      │       │           │   ├── badge_only.css
      │       │           │   ├── fonts
      │       │           │   │   ├── fontawesome-webfont.eot
      │       │           │   │   ├── fontawesome-webfont.svg
      │       │           │   │   ├── fontawesome-webfont.ttf
      │       │           │   │   ├── fontawesome-webfont.woff
      │       │           │   │   ├── fontawesome-webfont.woff2
      │       │           │   │   ├── lato-bold-italic.woff
      │       │           │   │   ├── lato-bold-italic.woff2
      │       │           │   │   ├── lato-bold.woff
      │       │           │   │   ├── lato-bold.woff2
      │       │           │   │   ├── lato-normal-italic.woff
      │       │           │   │   ├── lato-normal-italic.woff2
      │       │           │   │   ├── lato-normal.woff
      │       │           │   │   ├── lato-normal.woff2
      │       │           │   │   ├── Roboto-Slab-Bold.woff
      │       │           │   │   ├── Roboto-Slab-Bold.woff2
      │       │           │   │   ├── Roboto-Slab-Regular.woff
      │       │           │   │   └── Roboto-Slab-Regular.woff2
      │       │           │   └── theme.css
      │       │           ├── doctools.js
      │       │           ├── documentation_options.js
      │       │           ├── file.png
      │       │           ├── jquery.js
      │       │           ├── js
      │       │           │   ├── badge_only.js
      │       │           │   ├── html5shiv.min.js
      │       │           │   ├── html5shiv-printshiv.min.js
      │       │           │   └── theme.js
      │       │           ├── language_data.js
      │       │           ├── minus.png
      │       │           ├── plus.png
      │       │           ├── pygments.css
      │       │           ├── searchtools.js
      │       │           └── underscore.js
      │       ├── make.bat
      │       ├── Makefile
      │       ├── requirements.txt
      │       └── source
      │           ├── class.rst
      │           ├── conf.py
      │           ├── index.rst
      │           ├── question.rst
      │           ├── session.rst
      │           ├── _static
      │           ├── table_joueur.png
      │           └── _templates
      ├── helper
      │   ├── connection.php
      │   ├── header.php
      │   ├── rng.php
      │   └── schema.sql
      ├── html
      │   ├── accueil.php
      │   ├── admin.php
      │   ├── ajout_score.php
      │   ├── assets
      │   │   ├── images
      │   │   │   ├── logo2.png
      │   │   │   ├── logo_git.png
      │   │   │   ├── logo.png
      │   │   │   ├── question10.png
      │   │   │   ├── question11.png
      │   │   │   ├── question12.png
      │   │   │   ├── question13.png
      │   │   │   ├── question14.png
      │   │   │   ├── question15.png
      │   │   │   ├── question16.png
      │   │   │   ├── question17.png
      │   │   │   ├── question18.png
      │   │   │   ├── question19.png
      │   │   │   ├── question1.png
      │   │   │   ├── question20.png
      │   │   │   ├── question2.png
      │   │   │   ├── question3.png
      │   │   │   ├── question4.png
      │   │   │   ├── question5.png
      │   │   │   ├── question6.png
      │   │   │   ├── question7.png
      │   │   │   ├── question8.png
      │   │   │   └── question9.png
      │   │   ├── js
      │   │   │   ├── calcule_points.js
      │   │   │   ├── choix.js
      │   │   │   ├── comparaison_envoie.js
      │   │   │   └── jquery.min.js
      │   │   ├── style_accueil.css
      │   │   ├── style_admin.css
      │   │   ├── style_classement.css
      │   │   ├── style_classement_groupe.css
      │   │   ├── style_index.css
      │   │   └── style_question.css
      │   ├── classement_groupe.php
      │   ├── classement.php
      │   ├── index.php
      │   ├── logout_admin.php
      │   ├── logout.php
      │   └── question.php
      └── README.rst


####

Auteurs
======================

- Alexis__ Lemonnier__
- Axel__ Plault__
- Maël__ Bodin__
- Armand__ Zireg__


__ https://github.com/fruixy
__ https://github.com/fruixy
__ https://github.com/AxEl811
__ https://github.com/AxEl811
__ https://github.com/Maelbo
__ https://github.com/Maelbo
__ https://github.com/Armand-Cloug
__ https://github.com/Armand-Cloug

