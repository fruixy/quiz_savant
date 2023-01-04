<?php require '../helper/head.php'; 
require('../helper/connection.php');?>
<!--Pour les tests il faut penser a rajouter le /?ID=1 dans l'URL
<?php

$query = $pdo->prepare("SELECT * FROM Questions WHERE ID=:ID");
$success = $query->execute([
    "ID"=>intval($_GET["ID"])
]); 
$reponse = $query->fetch(PDO::FETCH_ASSOC);
?>


        Question : <?= $reponse["Q"] ?><br><br>
        rep A : <?= $reponse["A"]?> <br><br>
        rep B : <?= $reponse["B"] ?><br><br>
        rep C : <?= $reponse["C"] ?> <br><br>
        rep D : <?= $reponse["D"] ?><br><br>
        Bonne reponse : <?= $reponse["R"] ?><br><br>




<?php
/*Verification du lien entre la bdd et php*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

?>
