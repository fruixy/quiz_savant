<?php require '../helper/header.php'; ?>

<html>
<body>
    <div class="site">
        <div class="top">
            <div class="image">
                <img src="./assets/images/logo.png" alt="" class="logo">
            </div>
        </div>
        <div class="bar"></div>
        <div class="div_question">
            <div class="question">
                <p class="texte">que signifit ce pictogramme ?</p>
            </div>
        </div>
        <div class="reponse">
            <div class="b1">
                <input id="hide1"><a class="texte_bouton"></a></input>
            </div>
            <div class="b2">
                <input id="hide2"><a class="texte_bouton"></a></input>
            </div>
            <div class="b3">
                <input id="hide3"><a class="texte_bouton"></a></input>
            </div>
            <div class="b4">
                <input id="hide4"><a class="texte_bouton"></a></input>
            </div>
            <div class="b5">
                <a class="texte_reponse">positif à l'exterieur des racines</a>
            </div>
            <script>
              const button1 = document.getElementById('hide1');
              const button2 = document.getElementById('hide2');
              const button3 = document.getElementById('hide3');
              const button4 = document.getElementById('hide4');

              button1.addEventListener('click', () => {
                button1.remove();
                button2.remove();
                button3.remove();
                button4.remove();
              });

              button2.addEventListener('click', () => {
                button1.remove();
                button2.remove();
                button3.remove();
                button4.remove();
              });

              button3.addEventListener('click', () => {
                button1.remove();
                button2.remove();
                button3.remove();
                button4.remove();
              });

              button4.addEventListener('click', () => {
                button1.remove();
                button2.remove();
                button3.remove();
                button4.remove();
              });
            </script>
        </div>
    </div>
</body>

</html>