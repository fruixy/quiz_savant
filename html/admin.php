<?php require '../helper/header.php'; ?>

<link rel="stylesheet" type="text/css" href="assets/style_admin.css" />

<html>
<body>

        <?php if(isset($_POST['username']) && isset($_POST['password'])){ 
                    if($_POST['username'] === "admin" && $_POST['password'] === "admin"){
                        $_SESSION['admin'] = true; 
                        
                        } else {
                            echo "es-tu vraiment l'admin ?"; 
                        }
                    }
                ?>
        <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
            <a class="text">Vous êtes admin !</a>
            <br>
            <a class="text">accèder au classement ici</a>
            <br>
            <a href="./classement.php" class="text"><button>classement</button></a>
        
        
        <?php else: ?>
        
        <div class="div-logo">
            <img src=".\assets\images\logo2.png" alt="" class="logo">
        </div>
        <div class="form">
            <form method="post" id='indexform'>
                <fieldset>
                    <div class="divindex">
                        <label for="prenom"></label>
                        <input id="prenom" name="username" type="text" name="username" placeholder="pseudo" required="required" />
                    </div>
                    <br> 
                    <div class="divindex">
                        <label for="mdp"></label>
                        <input id="mdp" name="password" type="password" name="password" placeholder="Mdp" required="required" />
                    </div>
                    <br>
                    <div>
                        <button id="boutonconnection" type="submit">Connexion</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <?php endif;?>
</body>
</html>