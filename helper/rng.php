<?php

require "../helper/connection.php";

/*$IDJ=$_SESSION["IDJ"];*/
$IDJ=$_SESSION["IDJ"]; 
$query = $pdo->query("SELECT IDQ FROM Questions WHERE IDQ NOT IN (SELECT IDQI FROM Intermediaire WHERE IDJI= $IDJ)")->fetchAll(); //recupére toutes les questions qui ne sont pas tombées 

if (empty($query)) {  //si la liste est vide 
    header('Location: /classement.php'); //redirigé sur la page classement.php
    exit();
}

$random = array_rand($query); //prend un nombre aleatoire dans les questions qui ne sont pas tombées 
$IDQI = $query[$random]['IDQ']; // récupère l'ID de la question choisie aléatoirement
$IDJI = $IDJ; //attribue l'ID joueur a la variable IDJI

$req = $pdo->prepare("INSERT INTO Intermediaire (IDQI, IDJI) VALUES (:IDQI, :IDJI)"); //prepare la question deja tombée avec l'ID joueur et l'ID de la question 
$req->execute(array(
    'IDQI' => $IDQI,
    'IDJI' => $IDJI
));
?>