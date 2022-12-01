<?php require '../helper/head.php'; 
require('../helper/connection.php');?>
<!--Pour les tests il faut penser a rajouter le /?ID=1 dans l'URL -->
<!-- Afficher les questions et les reponses -->
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

<!-- modifier le score d'un joueur -->
<?php   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
        $Score=$_POST['Score'];
        //requête d'insertion SQL
        require('../helper/connection.php');
        $query = $pdo->prepare("UPDATE Joueurs SET Score=:Score WHERE ID=:ID;");
        $success = $query->execute([   
              "Score" => $Score,
        ]);
        if($success){
        echo "Le score a bien été ajouter !";
        }else {
            $error = $query->errorInfo()[2];
            echo "Erreur : $error \n";
        }
    }

?>
<!-- Recupere le score d'un joueur -->
<?php
        $query = $pdo->prepare("SELECT Score FROM Joueurs WHERE ID=:ID");
        $success = $query->execute(["ID"=>intval($_GET["ID"])]); 
        $reponse = $query->fetch(PDO::FETCH_ASSOC);
        ?>

        Score : <?= $reponse["Score"] 
?>
