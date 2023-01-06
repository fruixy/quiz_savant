<?php require '../helper/header.php'; ?>
<?php require '../helper/connection.php'; ?>
<?php require '../helper/rng.php'; ?>

<link rel="stylesheet" type="text/css" href="assets/style_question.css" />

<?php
/* Test pour verifeir que l'IDJ est bon */
echo $_SESSION['IDJ'];
?>

<?php
/* Requete pour recuperer la question à partir de l'ID donné dans le lien */
    $query = $pdo->prepare("SELECT * FROM Questions WHERE IDQ=:IDQ");
    $success = $query->execute([
    "IDQ"=>intval($_GET["IDQ"])]); 
    $Question = $query->fetch(PDO::FETCH_ASSOC); 
?>

<!-- On recharge la page au bout de 33 sec -->
<meta http-equiv="refresh" content="33;url=question.php?IDQ=<?php echo $random?>">

<html>
<body>
    <div class="site">
        <div class="top">
            <div class="image">
                <img src="./<?= $Question["Image"] ?>" alt="" class="logo">
            </div>
        </div>
        <div class="bar"></div>
        <div class="div_question">
            <div class="question">
                <p class="texte"> <?= $Question["Q"] ?> </p>
            </div>
        </div>
        <form action="" method="POST">
        <div class="reponse">
                <div class="b1">
                    <input id="hide1" type="submit" name="BoutonA" value=" <?= $Question["A"]; ?>" ><a class="texte_bouton" > </a></input>
                </div>
                <div class="b2">
                    <input id="hide2" type="submit" name="BoutonB" value=" <?= $Question["B"]; ?>" ><a class="texte_bouton" > </a></input>
                </div>
                <div class="b3">
                    <input id="hide3" type="submit" name="BoutonC" value=" <?= $Question["C"]; ?>" ><a class="texte_bouton" > </a></input>
                </div>
                <div class="b4">
                    <input id="hide4" type="submit" name="BoutonD" value=" <?= $Question["D"]; ?>" ><a class="texte_bouton" > </a></input>
                </div>
            
            <div class="b5">
                <a class="texte_reponse"> <?= $Question["R"]; ?> </a>
            </div>
        </div>
        </form>
    </div>
    <script>

let points = 101;
let vitesse = "";
let resultat = "";
  function decreasePoints() {
    points--;
  }

  setInterval(decreasePoints, 300);





  const button1 = document.getElementById('hide1');
  const button2 = document.getElementById('hide2');
  const button3 = document.getElementById('hide3');
  const button4 = document.getElementById('hide4');
  

  button1.addEventListener('click', () => {
    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    vitesse = points;
  });

  button2.addEventListener('click', () => {
    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    vitesse = points;
  });

  button3.addEventListener('click', () => {
    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    vitesse = points;
  });

  button4.addEventListener('click', () => {
    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    vitesse = points;
  });

  function Score() {
    console.log(vitesse);
    resultat = <?php echo json_encode($validation); ?>;
    if (resultat = 1) {
        console.log("envoie")
        fetch('./score.php', {
            method: 'POST',
            body:'score= ' + encodeURIComponent(resultat),
            headers: {
                'Content-Type': 'application/x-www-form-urlenncoded'
            }
        });
    }
  }
  setTimeout(Score, 30000);

</script>



</body>
</html>