// cliquer sur une touche
let touchs = document.getElementsByClassName('touch');
let screen = document.getElementById('screen');
let screenContent = "";
let equation = "";
let init = 1;

for(let i = 0; i < touchs.length; i++) {
    let touch = touchs[i];
    touch.addEventListener('click', function() {
        checkTouch(this.dataset.value);
    });
}


const checkTouch = (touch) => {

    if(init == 1) {
        screenContent = "";
        init = 0;
    }

    // quand on clicque sur une touche ça s'affiche à l'écran
    if( touch != "+" && touch != "=") {                 // si on clique sur un nombre
        if (screenContent == "+") {
            screenContent = touch;
        } else {
            screenContent = screenContent + touch;
        }
    } else if( touch == "=") {             // si c'est =
        screenContent = eval(equation);
        init = 1;
    } else {   // si c'est plus
        screenContent = touch;
    }

    if( init == 1) {
        equation = "";
    } else {
        equation += touch;
    }


    screen.textContent = screenContent;
}


// on clique sur un  signe
// sur un autre touche
// on clique sur = et ça affiche le résultat


