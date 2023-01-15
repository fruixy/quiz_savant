<?php require '../helper/header.php'; ?>

<link rel="stylesheet" type="text/css" href="assets/style_admin.css" />

<html>
<body>

    <div>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Mdp=$_POST['mdp'];
            $Prenom=$_POST['prenom'];
        }

        $query = $pdo->prepare("SELECT * FROM Joueurs WHERE Prenom=:Prenom and Nom=:Nom");
        $success = $query->execute(["Prenom" => $Prenom, "Nom" => $Mdp,]);
        $ok = $query->fetch(PDO::FETCH_ASSOC);

        if($success){
            $Admin = $ok['IDJ'];
            if( $Admin == '1'){
                echo "Le joueur a bien été ajouter !";
                session_start();
                $_SESSION['logon_admin'] = true;
            }
        }
        ?>

        <?php if(isset($_SESSION['logon_admin']) && $_SESSION['logon_admin'] === true):
            header('Location: /classement.php');
            die();
            ?>

        <?php else: ?>

        <div class="div-logo">
            <img src=".\assets\images\logo2.png" alt="" class="logo">
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
                        <label for="mdp"></label>
                        <input id="mdp" name="mdp" type="password" name="password" placeholder="Mdp" required="required" />
                    </div>
                    <br>
                    <div>
                        <button id="boutonconnection" type="submit">Connexion</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php endif;?>
    </div>
</body>
</html>