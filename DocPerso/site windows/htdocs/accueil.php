<?php require '..\helper\header.php'; ?>
<?php require '..\helper\rng.php'; ?>

<link rel="stylesheet" type="text/css" href="assets\style_accueil.css" />

<?php
/* On recupère les variables de la Session */
$PrenomAcc = $_SESSION["Prenom"];
$NomAcc = $_SESSION["Nom"];
/* On recupere l'ID du joueur connécté */
$query = $pdo->prepare("SELECT * FROM Joueurs WHERE Prenom=:Prenom and Nom=:Nom");
$success = $query->execute(["Prenom" => $PrenomAcc, "Nom" => $NomAcc,]);
$ok = $query->fetch(PDO::FETCH_ASSOC);
$idj = $ok["IDJ"];
/* On met l'ID du joueur connecté dans une variable de session */
$_SESSION["IDJ"] = $idj;

/* Tests invisibles pour les utilisateurs mobiles */
echo " -- ";
echo $_SESSION['Prenom'];
echo $_SESSION['Nom'];
echo " -- ";
echo $PrenomAcc;
echo $NomAcc;
echo " -- ";
echo $idj;
echo " -- ";
echo $_SESSION['IDJ'];
?>

<body>
    <div class="logo">
        <a href=".\logout.php" > <img src=".\assets\images\logo.png" alt="" height="110%;"> </a>
    </div>
    <div class="regle">
        <ul>
            <li>Tu as 30 secondes pour répondre aux questions</li>
            <li>Il y a 20 questions au total</li>
            <li>Plus vite tu réponds, plus de point tu auras</li>
            <li>Tu as 4 possibilités de réponse, une seule est la bonne</li>
            <li>Soit rapide et juste pour être le vainqueur</li>
            <li>Et oublie pas de prendre du plaisir</li>
        </ul>
    </div>
    <div class="bouton">
        <button onclick="window.location.href='question.php?IDQ=<?php echo $random?>';">   <a class="text-button"> Jouer      </a> </button>
        <button onclick="window.location.href='classement.php';"> <a class="text-button"> Classement </a> </button>
    </div>
    
</body>