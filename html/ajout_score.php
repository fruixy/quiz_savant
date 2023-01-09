<?php require '../helper/connection.php'; ?>
<?php 
    $points = $_POST['vitesse'];
    $score = $points;
    $id=1;

    // Préparation de la requête
    $sql = $pdo->prepare("UPDATE Joueurs SET Score = score + $score WHERE IDJ = $id");

    // Exécution de la requête
    $sql->execute()
    
    ?>