<?php 
  
   /* $validation = 3;
    if (isset($_POST['reponse'])) {
        
        $validation = 4;
        $reponse_choisis = $_POST['reponse'];
        $bonne_reponse = $Question['R'];

        if ($reponse_choisis == $bonne_reponse) {
            $validation = 2;
        } else {
            $validation = 5;
        }
    }*/

    $points = $_POST('vitesse');
    $score = $points;
    $id=1;

    // Préparation de la requête
    $sql = $pdo->prepare("UPDATE Joueurs SET Score = score + $score WHERE IDJ = $id");

    // Exécution de la requête
    $sql->execute()
    
    ?>