<?php require '../helper/connection.php'; ?>
<?php
    session_start();

    // Recupere le nom et le prenom du joueur 
    $nom = $_SESSION['Nom'];
    $prenom = $_SESSION['Prenom'];
    
    // Requete sql pour recuperer l'IDJ en focntion de son nom et prenom
    $query = $pdo->prepare("SELECT IDJ FROM Joueurs WHERE Nom = :nom AND Prenom = :prenom");
    
    // Execute la commande sql
    $query->execute([
        "nom" => $nom,
        "prenom" => $prenom
    ]);
    
    $player = $query->fetch();
    $id = $player['IDJ'];


    $points = $_POST['vitesse'];
    $score = $points;
    

    // Préparation de la requête
    $sql = $pdo->prepare("UPDATE Joueurs SET Score = score + $score WHERE IDJ = $id");

    // Exécution de la requête
    $sql->execute()
    
    ?>