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