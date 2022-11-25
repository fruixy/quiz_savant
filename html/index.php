<<<<<<< HEAD
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
            <img src="./assets/images/logo.png" alt="" class="logo">
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
=======
<?php include 'C:\Apache24\helper\header.php'; ?>
<body>

<a href="\acceuil.php" class="pure-button pure-button-primary">Test</a>

    <!-- contenu page -->
    <div class="pure-g">
        <!-- Page -->
        <div class="pure-u-7-8">
            <div class="container">

                <?php if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['classe'])){ 
                    include('C:\Apache24\helper\connection.php');
                    $prenom = $_REQUEST['prenom'];
                    $nom = $_REQUEST['nom'];
                    $classe = $_REQUEST['classe'];
                    $pdo->querry("INSERT into `joueurs` (Nom, Prenom, Classe, Score) VALUES ('$nom', '$prenom', '$classe','0')");
                    $_SESSION['logon'] = true;  
                }?>

                <?php if(isset($_SESSION['logon']) && $_SESSION['logon'] === true): ?>
                    <?php header('Location: \acceuil.php');
                    die();
                    ?>

                <?php else: ?>

                <h2>Quiz RDV Savant</h2>

                <form class="pure-form pure-form-aligned"  method="post">
                    <fieldset>
                        <div class="pure-control-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="username" placeholder="username" />
                        </div>
                        <div class="pure-control-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="text" placeholder="text" />
                        </div>
                        <div class="pure-control-group">
                        <label for="classe">Classe</label>
                            <select id="stacked-classe">
                                <option>RT</option>
                                <option>MP</option>
                                <option>TC</option>
                            </select>
                        </div>
                        <div class="pure-controls">
                            <button type="submit" class="pure-button pure-button-primary">Connexion</button>
                        </div>
                    </fieldset>
                </form>
                
                <?php endif ?>
            </div>
        </div>
>>>>>>> 4cb2f7ecd055bd8e4b51f08b34ee05977efd6755
    </div>
</body>
</html>