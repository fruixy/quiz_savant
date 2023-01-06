<?php require '../helper/connection.php'; ?>

<?php


$query = $pdo->query("SELECT IDQ FROM Questions WHERE IDQ NOT IN (SELECT IDQI FROM Intermediaire WHERE IDJI= '1')")->fetchAll(); //recupére toutes les questions qui ne sont pas tombées 
$random = array_rand($query); //prend un nombre aleatoire dans les questions qui ne sont pas tombées 

unset($query[$random]);  //supprime le nombre aleatoire de la liste 
?>

<?php

$IDJI='1';//attribue l'ID joueur a la variable IDJI

$req=$pdo->prepare("INSERT INTO Intermediaire (IDQI, IDJI) VALUES (:IDQI, :IDJI)"); //prepare la question deja tombée avec l'ID joueur et l'ID de la question 
$req->execute(array(
    'IDQI'=>$random,
    'IDJI'=>$IDJI
));
?>


<!-- code pour quand la liste est vide afficher la page de classement -->
<?php 

    if (empty($query)){  //si la liste est vide 
        header('Location: /classement.php'); //redirigé sur la page classement.php
        exit();
    }

?>