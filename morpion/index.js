// cibler les touches
let myCels = document.getElementsByClassName('myCel');
let validButton = document.getElementById('validChoice');
let activeCel;

const touchCel = (currentCel) => {
    activeCel = currentCel;
    let current = currentCel.textContent.trim();
    if(current == "") {
        currentCel.textContent="X";
    } else if( current == "X") {
        currentCel.textContent="O";
    } else if (current == "O") {
        currentCel.textContent="";
    }
}

const validChoice = () => {
    activeCel.classList.remove('playable');

    // verifier si gagnant


    // lancer le tour computer
    computerTurn();
}


const computerTurn = () => {
    console.log('computer turn');
    let playables = document.getElementsByClassName('playable');
    let key = Math.floor(Math.random() * playables.length);
    let choice = Math.floor(Math.random() * 2);
    if(choice == 0) {
        playables[key].textContent="X";
    } else {
        playables[key].textContent="O";
    }
    playables[key].classList.remove('playable');
}

// écouter le click sur les touches
for(let i = 0; i < myCels.length; i++) {
    myCels[i].addEventListener('click', function() {
        if(this.classList.contains('playable')) {
            touchCel(this);
        }
    });
}

validButton.addEventListener('click', function() {
    validChoice();
})

