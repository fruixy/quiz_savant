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
                <button><a class="texte_bouton" name="BoutonA" > A : <?= $Question["A"]; ?> </a></button>
            </div>
            <div class="b2">
                <button><a class="texte_bouton" name="BoutonB" > B : <?= $Question["B"]; ?> </a></button>
            </div>
            <div class="b3">
                <button><a class="texte_bouton" name="BoutonC" > C : <?= $Question["C"]; ?> </a></button>
            </div>
            <div class="b4">
                <button><a class="texte_bouton" name="BoutonD" > D : <?= $Question["D"]; ?> </a></button>
            </div>
            <div class="b5">
                <a class="texte_reponse"> Bonne reponse : <?= $Question["R"]; ?> </a>
            </div>
        </div>
    </div>

<?php

    if(isset($_POST['BoutonA']));
    {
        $ReponseClicked = $Question["A"];
        echo " JE CLICK A";
    };

    if(isset($_POST['BoutonB']));
    {
        $ReponseClicked = $Question["B"];
        echo " JE CLICK B";
    };

    if(isset($_POST['BoutonC']));
    {
        $ReponseClicked = $Question["C"];
        echo " JE CLICK C";
    };

    if(isset($_POST['BoutonD']));
    {
        $ReponseClicked = $Question["D"];
        echo " JE CLICK D";
    };
?>

<?php 

$ReponseChoisie = $ReponseClicked;

echo " TEST";
echo $ReponseClicked;
echo " ------ ";
echo $ReponseChoisie;
?>

</body>
</html>