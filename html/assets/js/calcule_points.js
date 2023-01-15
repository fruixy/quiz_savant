let points = 101; // déclare une variable "points" avec une valeur initiale de 101
let vitesse = ""; // déclare une variable "vitesse" qui est initialisée vide

// déclare une fonction "decreasePoints" qui décrémente la valeur de la variable "points" de 1 à chaque appel
  function decreasePoints() {
    points--;
  }
  
  // utilise la fonction setInterval pour appeler la fonction "decreasePoints" toutes les 300 millisecondes
  setInterval(decreasePoints, 300);
