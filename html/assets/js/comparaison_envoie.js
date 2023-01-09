

  const rep = document.querySelector('#bonne_reponse');
    let bonne_reponse = rep.value;
    console.log(bonne_reponse);

  function Score(click) {
  console.log(bonne_reponse);
  if (click === bonne_reponse) {
    console.log(vitesse);
    $.post('ajout_score.php',
    {
      vitesse: vitesse
    }, function(response){

    });
  } else {
    console.log('non');
  }
}

  
