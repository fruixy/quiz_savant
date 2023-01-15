const button1 = document.getElementById('hide1');
const button2 = document.getElementById('hide2');
const button3 = document.getElementById('hide3');
const button4 = document.getElementById('hide4');

// Ajout d'un écouteur d'événements sur le bouton1 pour détecter un clic
button1.addEventListener('click', () => {
    // Récupère l'élément HTML ayant l'identifiant "hide1"
    const input = document.querySelector('#hide1');
    // Récupère la valeur de l'élément et la stocke dans la variable "click"
    let click = input.value;
    // Affiche la valeur de "click" dans la console
    console.log(click);

    // Supprime tous les boutons
    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    // Affecte la variable "vitesse" avec la variable "points"
    vitesse = points;

    // Appelle la fonction "Score" avec la valeur de "click" comme argument
    Score(click);
  });

// Ajout d'un écouteur d'événements sur le bouton2 pour détecter un clic
button2.addEventListener('click', () => {
    // Récupère l'élément HTML ayant l'identifiant "hide2"
    const input = document.querySelector('#hide2');
    // Récupère la valeur de l'élément et la stocke dans la variable "click"
    let click = input.value;
    // Affiche la valeur de "click" dans la console
    console.log(click);

    // Supprime tous les boutons
    button1.remove();
    button2.remove();
    button3.remove();
    button4.remove();
    // Affecte la variable "vitesse" avec la variable "points"
    vitesse = points;

    // Appelle la fonction "Score" avec la valeur de "click" comme argument
    Score(click);
  });

// Ajout d'un écouteur d'événements sur le bouton3 pour détecter un clic
button3.addEventListener('click', () => {
  // Récupère l'élément HTML ayant l'identifiant "hide3"
  const input = document.querySelector('#hide3');
  // Récupère la valeur de l'élément et la stocke dans la variable "click"
  let click = input.value;
  // Affiche la valeur de "click" dans la console
  console.log(click);

  // Supprime tous les boutons
  button1.remove();
  button2.remove();
  button3.remove();
  button4.remove();
  // Affecte la variable "vitesse" avec la variable "points"
  vitesse = points;

  // Appelle la fonction "Score" avec la valeur de "click" comme argument
  Score(click);
});

// Ajout d'un écouteur d'événements sur le bouton4 pour détecter un clic
button4.addEventListener('click', () => {
  // Récupère l'élément HTML ayant l'identifiant "hide4"
  const input = document.querySelector('#hide4');
  // Récupère la valeur de l'élément et la stocke dans la variable "click"
  let click = input.value;
  // Affiche la valeur de "click" dans la console
  console.log(click);

  // Supprime tous les boutons
  button1.remove();
  button2.remove();
  button3.remove();
  button4.remove();
  // Affecte la variable "vitesse" avec la variable "points"
  vitesse = points;

  // Appelle la fonction "Score" avec la valeur de "click" comme argument
  Score(click);
});