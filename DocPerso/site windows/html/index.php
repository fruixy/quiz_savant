<?php require '../helper/header.php'; ?>
<html>
<body>

    <div>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Nom=$_POST['nom'];
            $Prenom=$_POST['prenom'];
            $Classe=$_POST['classe'];
            $Score= '0';
            
            $query = $pdo->prepare("INSERT INTO Joueurs (Prenom, Nom, Classe, Score) 
            VALUES (:Prenom, :Nom, :Classe, :Score)");
            $success = $query->execute([
                  "Nom" => $Nom,
                  "Prenom" => $Prenom,
                  "Classe" => $Classe,
                  "Score" => $Score,
            ]);
            if($success){
            echo "Le joueur a bien été ajouter !";
            $_SESSION['logon'] = true;
            }else {
                $error = $query->errorInfo()[2];
                echo "Erreur : $error \n";
            }
        }?>

        <?php if(isset($_SESSION['logon']) && $_SESSION['logon'] === true): ?>
            <?php header('Location: ./acceuil.php');
            die();
            ?>

        <?php else: ?>
        <div class="div-logo">
            <img src="./assets/images/logo2.png" alt="" class="logo">
        </div>
        <div class="form">
            <form method="post" id='indexform'>
                <fieldset>
                    <div class="divindex">
                        <label for="prenom"></label>
                        <input id="prenom" name="prenom" type="text" name="text" placeholder="Prénom" />
                    </div>
                    <br> 
                    <div class="divindex">
                        <label for="nom"></label>
                        <input id="nom" name="nom" type="text" name="text" placeholder="Nom" />
                    </div>
                    <br>
                    <div class="divindex" >
                    <label for="classe"></label>
                        <select id="classe" name="classe">
                            <option>RT</option>
                            <option>MP</option>
                            <option>TC</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <button id="boutonconnection" type="submit">Connexion</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php endif ?>
    </div>
</body>
</html>