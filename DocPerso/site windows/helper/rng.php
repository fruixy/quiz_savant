<?php require '..\helper\connection.php'; ?>

<?php
$IDJ = $_SESSION["IDJ"];
?>

<?php
$query = $pdo->query("SELECT IDQ FROM Questions WHERE IDQ NOT IN (SELECT IDQI FROM Intermediaire WHERE IDJI=$IDJ)")->fetchAll(); //recupére toutes les questions qui ne sont pas tombées 
$random = array_rand($query); //prend un nombre aleatoire dans les questions qui ne sont pas tombées 
print_r($random); //affiche le nbr aléatoire
unset($query[$random]);  //supprime le nombre aleatoire de la liste 

$IDJI='8';//attribue l'ID joueur a la variable IDJI
print_r($IDJI); //affiche IDJI
print_r($IDQI); //affiche IDQI

$req=$pdo->prepare("INSERT INTO Intermediaire (IDQI, IDJI) VALUES (:IDQI, :IDJI)"); //prepare la question deja tombée avec l'ID joueur et l'ID de la question 
$req->execute(array(
    'IDQI'=>$random,
    'IDJI'=>$IDJI
));
echo'Les ID ont été ajouter';
?>

<?php 
    if (empty($query)){  //si la liste est vide 
        header('Location: /classement.php'); //redirigé sur la page classement.php
        exit();
    }
?>