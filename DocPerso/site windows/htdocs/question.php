<?php require '..\helper\header.php'; ?>
<?php require '..\helper\connection.php'; ?>
<?php require '..\helper\rng.php'; ?>

<link rel="stylesheet" type="text/css" href="assets\style_question.css" />

<?php
/* Test pour verifeir que l'IDJ est bon */
echo $_SESSION['IDJ'];
?>

<?php
/* Requete pour recuperer la question à partir de l'ID donné dans le lien */
    $query = $pdo->prepare("SELECT * FROM Questions WHERE IDQ=:IDQ");
    $success = $query->execute([
    "IDQ"=>intval($_GET["IDQ"])]); 
    $Question = $query->fetch(PDO::FETCH_ASSOC); 
?>

<!-- On recharge la page au bout de 33 sec -->
<meta http-equiv="refresh" content="33;url=question.php?IDQ=<?php echo $random?>">

<html>
<body>
    <div class="site">
        <div class="top">
            <div class="image">
                <img src=".\assets\images\logo.png" alt="" class="logo">
            </div>
        </div>
        <div class="bar"></div>
        <div class="div_question">
            <div class="question">
                <p class="texte"> Question : <?= $Question["Q"] ?> </p>
            </div>
        </div>
        <div class="reponse">
            <div class="b1">
                <button><a class="texte_bouton"> A : <?= $Question["A"]; ?> </a></button>
            </div>
            <div class="b2">
                <button><a class="texte_bouton"> B : <?= $Question["B"]; ?> </a></button>
            </div>
            <div class="b3">
                <button><a class="texte_bouton"> C : <?= $Question["C"]; ?> </a></button>
            </div>
            <div class="b4">
                <button><a class="texte_bouton"> D : <?= $Question["D"]; ?> </a></button>
            </div>
            <div class="b5">
                <a class="texte_reponse"> Bonne reponse : <?= $Question["R"]; ?> </a>
            </div>
        </div>
    </div>

<?php 
/* TEST */
$ReponseChoisie = $Question["R"]; 
?>

<?php 
/* Si la bonne reponse est choisie on calcul les points sinon pas besoin */
if ($ReponseChoisie = $Question["R"]) {

    /* Requete pour recuperer l'ancien Score */
    $idj = $_SESSION['IDJ'];
    $requete = $pdo->prepare("SELECT * FROM Joueurs WHERE IDJ=:IDJ");
    $reussite = $requete->execute(["IDJ" => $idj,]); 
    $ok = $reussite->fetch(PDO::FETCH_ASSOC);
    $AncienScore = $ok['Score'];

    /* Calcul du Score */
    $PointsEnleves=$Duree*0.3;
    $PointsGagnes=100-$PointsEnleves;
    $NouveauScore = $AncienScore + $PointsGagnes;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /* Requete qui met à jour le score dans la BDD */
        $Score=$_POST['NouveauScore'];
        $query = $pdo->prepare("UPDATE Joueurs SET Score=:Score WHERE IDJ=$idj;");
        $success = $query->execute(["Score" => $NouveauScore,]);
        if($success){
            echo "Le score a bien été ajouter !";
        }else {
            $error = $query->errorInfo()[2];
            echo "Erreur : $error \n";
        }
    }
} 
?>

</body>
</html>