<?php require '../helper/header.php'; ?>
<?php require '../helper/connection.php'; ?>
<?php require '../helper/rng.php'; ?>
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
        <input id="bonne_reponse" type="hidden" name="reponse" value="<?= $Question["R"]; ?>">
                <div class="b1">
                    <input id="hide1" type="submit" name="reponse" value="<?= $Question["A"]; ?>">
                </div>
                <div class="b2">
                    <input id="hide2" type="submit" name="reponse" value="<?= $Question["B"]; ?>">
                </div>
                <div class="b3">
                    <input id="hide3" type="submit" name="reponse" value="<?= $Question["C"]; ?>">
                </div>
                <div class="b4">
                    <input id="hide4" type="submit" name="reponse" value="<?= $Question["D"]; ?>">
                </div>
            
            <div class="b5">
                <a class="texte_reponse" id="reponse_juste"><?= $Question["R"];?> </a>
                <input id="bonne_reponse" type="hidden" name="reponse" value="<?= $Question["R"]; ?>">
            </div>
        </div>
        </form>
    </div>

    <script>

let points = 101;
let vitesse = "";
  function decreasePoints() {
    points--;
  }

  setInterval(decreasePoints, 300);





  const button1 = document.getElementById('hide1');
  const button2 = document.getElementById('hide2');
  const button3 = document.getElementById('hide3');
  const button4 = document.getElementById('hide4');
  

  

  button1.addEventListener('click', () => {
    const input = document.querySelector('#hide1');
    let click = input.value;
    console.log(click);
    
    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    vitesse = points;

    Score(click);
  });

  button2.addEventListener('click', () => {
    const input = document.querySelector('#hide2');
    let click = input.value;
    console.log(click);

    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    vitesse = points;

    Score(click);
  });

  button3.addEventListener('click', () => {
    const input = document.querySelector('#hide3');
    let click = input.value;
    console.log(click);

    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    vitesse = points;

    Score(click);
  });

  button4.addEventListener('click', () => {
    const input = document.querySelector('#hide4');
    let click = input.value;
    console.log(click);

    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    vitesse = points;

    Score(click);
  });

  const rep = document.querySelector('#bonne_reponse');
    let bonne_reponse = rep.value;
    console.log(bonne_reponse);

  function Score(click) {
  console.log(bonne_reponse);
  if (click === bonne_reponse) {
    console.log(vitesse);
  } else {
    console.log('non');
  }
}

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = fonction() {
  if (this.readyState == 4 && this.status == 200) {
    var 
  }
}
  

</script>



</body>
</html>