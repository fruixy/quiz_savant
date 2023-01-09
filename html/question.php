<?php require '../helper/header.php'; ?>
<?php require '../helper/connection.php'; ?>
<?php require '../helper/rng.php'; ?>


<link rel="stylesheet" type="text/css" href="assets/style_question.css" />

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
                <img src="./<?= $Question["Image"] ?>" alt="" class="logo">
            </div>
        </div>
        <div class="bar"></div>
        <div class="div_question">
            <div class="question">
                <p class="texte"> <?= $Question["Q"] ?> </p>
            </div>
        </div>
        <form action="" method="POST">
        <div class="reponse">
        <input id="bonne_reponse" type="hidden" name="reponse" value="<?= $Question["R"]; ?>">
                <div class="b1">
                    <input id="hide1" type="submit" name="reponse" value="<?= $Question["A"]; ?>">
                </div>
                <div class="b2">
                    <input id="hide2" type="submit" name="reponse" value="<?= $Question["B"]; ?>">
                </div>
                <div class="b3">
                    <input id="hide3" type="submit" name="reponse" value="<?= $Question["C"]; ?>">
                </div>
                <div class="b4">
                    <input id="hide4" type="submit" name="reponse" value="<?= $Question["D"]; ?>">
                </div>
            
            <div class="b5">
                <a class="texte_reponse" id="reponse_juste"><?= $Question["R"];?> </a>
                <input id="bonne_reponse" type="hidden" name="reponse" value="<?= $Question["R"]; ?>">
            </div>
        </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/calcule_points.js"></script>
    <script src="assets/js/choix.js"></script>
    <script src="assets/js/comparaison_envoie.js"></script>



</body>
</html>