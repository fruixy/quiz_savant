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
    </div>
</body>
</html>