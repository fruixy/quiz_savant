<?php require '..\helper\header.php'; ?>
<?php require '..\helper\connection.php'; ?>
<?php require '..\helper\rng.php'; ?>

<?php
/* Requete pour recuperer la question à partir de l'ID donné dans le lien */
    $query = $pdo->prepare("SELECT * FROM Questions WHERE IDQ=:IDQ");
    $success = $query->execute([
    "IDQ"=>intval($_GET["IDQ"])]); 
    $Question = $query->fetch(PDO::FETCH_ASSOC); 
?>

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
                <button><a class="texte_bouton" onclick="BoutonA();" > A : <?= $Question["A"]; ?> </a></button>
            </div>
            <div class="b2">
                <button><a class="texte_bouton" onclick="BoutonB();" > B : <?= $Question["B"]; ?> </a></button>
            </div>
            <div class="b3">
                <button><a class="texte_bouton" onclick="BoutonC();" > C : <?= $Question["C"]; ?> </a></button>
            </div>
            <div class="b4">
                <button><a class="texte_bouton" onclick="BoutonD();" > D : <?= $Question["D"]; ?> </a></button>
            </div>
            <div class="b5">
                <a class="texte_reponse"> Bonne reponse : <?= $Question["R"]; ?> </a>
            </div>
        </div>
    </div>

<script>

Function BoutonA(){
    $ReponseClicked = $Question["A"];
}

Function BoutonB(){
    $ReponseClicked = $Question["B"];
}

Function BoutonC(){
    $ReponseClicked = $Question["C"];
}

Function BoutonD(){
    $ReponseClicked = $Question["D"];
}

</script>

<?php 
$ReponseChoisie = $ReponseClicked;
echo " TEST";
echo $ReponseClicked;
echo " ------ ";
echo $ReponseChoisie;
?>

</body>
</html>