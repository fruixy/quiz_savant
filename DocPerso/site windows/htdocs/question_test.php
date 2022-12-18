<html>
<body>

<?php
echo $_SESSION['IDJ'];
?>

<div class="site">

<?php
    $query = $pdo->prepare("SELECT * FROM Questions WHERE IDQ=:IDQ");
    $success = $query->execute([
    "IDQ"=>intval($_GET["IDQ"])]); 
    $Question = $query->fetch(PDO::FETCH_ASSOC); 
?>

<div class="top">
        <div class="image">
            <img src="./assets/images/logo.png" alt="" class="logo">
        </div>

    <div class="div_question">
        <div class="question">
            <p class="texte"> Question : <?= $reponse["Q"] ?> </p>
        </div>
    </div>

    <div class="timer" id="timerreponse"></div>
    <script src="assets\timerreponse.js"></script>

    <div class="timer" id="timerquestion"></div>
    <script src="assets\timerquestion.js"></script>

</div>

<?php $start = hrtime(true); ?> 

<form method="post">
<div class="reponse">

    <div class="b1">
        <button class="texte_bouton" type="input" id='LettreChoisie' value='A' > A : <?= $Question["A"]; ?>  </button>
    </div>

    <div class="b2">
        <button class="texte_bouton" type="input" id='LettreChoisie' value='B' > B : <?= $reponse["B"]; ?> </button>
    </div>

    <div class="b3">
        <button class="texte_bouton" type="input" id='LettreChoisie' value='C' > C : <?= $reponse["C"]; ?> </button>
    </div>

    <div class="b4">
        <button class="texte_bouton" type="input" id='LettreChoisie' value='D' > D : <?= $reponse["D"]; ?> </button>
    </div>

</div>
</form>

<?php $ReponseChoisie = $reponse[$LettreChoisie]; 
$end=hrtime(true);
$Duree=$end-$start; ?>

<div class="bonnereponse"> 
    <button> Bonne reponse : <?= $reponse["R"]; ?> </button>
</div>

<?php if $ReponseChoisie == $Question["R"]{

    $_SESSION
    
    $PointsEnleves=$Duree*0.3
    $PointsGagnes=100-$PointsEnleves;

    $query = $pdo->prepare("SELECT * FROM Joueurs WHERE IDJ=:IDJ");
    $reussite = $query->execute([]); 
    $AncienScore = $reussite->fetch(PDO::FETCH_ASSOC);

    $NouveauScore = $AncienScore + $PointsGagnes;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
        $Score=$_POST['NouveauScore'];
        $query = $pdo->prepare("UPDATE Joueurs SET Score=:Score WHERE IDJ=:IDJ;");
        $success = $query->execute(["Score" => $Score,]);
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