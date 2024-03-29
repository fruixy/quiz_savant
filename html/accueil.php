<?php require '../helper/header.php'; ?>

<link rel="stylesheet" type="text/css" href="assets/style_accueil.css" />

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
?>

<body>
    <div class="logo">
        <a> <img src="./assets/images/logo.png" alt="" height="110%;"> </a>
    </div>
    <div class="regle">
        <ul>
            <li>20 questions</li>
            <li>30 secondes pour répondre</li>
            <li>Rapidité = score élevé</li>
            <li>Une bonne réponse</li>
            <li>Bonne chance</li>
        </ul>
    </div>

    <?php require '../helper/rng.php'; ?>

    <div class="bouton">
        <button><a class="text-button" style="text-decoration: none; color: white;" href='question.php?IDQ=<?php echo $IDQI?>'>Jouer</a></button>
    </div>
</body>