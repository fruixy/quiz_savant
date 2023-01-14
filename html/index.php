<?php require '../helper/header.php'; ?>

<link rel="stylesheet" type="text/css" href="assets/style_index.css" />

<html>
<body>

    <div>
        <?php 
        /* Requete pour inserer les données dans la database */
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
            session_start();
            /* On met le prenom et le nom dans une variable de Session */
            $_SESSION['logon'] = true;
            $_SESSION['Prenom'] = $Prenom;
            $_SESSION['Nom'] = $Nom;
            }else {
                $error = $query->errorInfo()[2];
                echo "Erreur : $error \n";
            }
        }?>

        <!-- Verification de la connection -->
        <?php if(isset($_SESSION['logon']) && $_SESSION['logon'] === true): ?>
            <?php header('Location: /accueil.php');
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
                        <input id="prenom" name="prenom" type="text" name="text" placeholder="Prénom" required="required" />
                    </div>
                    <br> 
                    <div class="divindex">
                        <label for="nom"></label>
                        <input id="nom" name="nom" type="text" name="text" placeholder="Nom" required="required" />
                    </div>
                    <br>
                    <div class="divindex" >
                    <label for="classe"></label>
                        <select id="classe" name="classe" placeholder="Groupe" required="required">
                            <option>Classe 1</option>
                            <option>Classe 2</option>
                            <option>Classe 3</option>
                            <option>Classe 4</option>
                            <option>Classe 5</option>
                            <option>Classe 6/option>
                            <option>Classe 7</option>
                            <option>Classe 8</option>
                            <option> Admins </option>
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