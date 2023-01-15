// On récupère la valeur de l'élément et on la stocke dans la variable "bonne_reponse"
const rep = document.querySelector('#bonne_reponse');
let bonne_reponse = rep.value;

// On affiche la valeur dans la console
console.log(bonne_reponse);

// On définit une fonction "Score" qui prend un argument "click"
function Score(click) {
    // On affiche la valeur de "bonne_reponse" dans la console
    console.log(bonne_reponse);
    // On vérifie si la valeur de "click" est égale à la valeur de "bonne_reponse"
    if (click === bonne_reponse) {
        // Si c'est le cas, on envoie une requête POST au script "ajout_score.php" avec les données "vitesse"
        console.log(vitesse);
        $.post('ajout_score.php',
        {
            vitesse: vitesse
        }, function(response){
            // On ne fait rien de spécifique avec la réponse
        });
    } else {
        // Si les valeurs ne sont pas égales, on affiche "non" dans la console
        console.log('non');
    }
}

  
