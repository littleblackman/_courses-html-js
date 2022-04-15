let touchs = document.getElementsByClassName('touch');
let screen = document.getElementById('screen');
let lastTouch = "";
let screenContent = "";
let currentType;
let operation = "";
let reset = 0;

for(let i = 0; i < touchs.length; i++) {
    let touch = touchs[i];
    touch.addEventListener('click', function() {
        let touchValue = touch.textContent;
        if(touchValue == "+") {
            currentType = "symbol";
        } else if (touchValue == "="){
            currentType = "result";
        } else {
            currentType = "nubmer";
        }
        manageTouch(touchValue, currentType);
    })
}


const manageTouch = (currentTouch, currentType) => {

    // si currentTouch est + => screenContent = currentTouch
    if(currentType == "symbol") {
       // faire clignoter screen ou afficher le symbol
        screenContent = currentTouch;
        if(lastTouch != "+" && lastTouch != "=") {
            operation += currentTouch;
        }
    } else if (currentType == "result") { // si currentType est egal
        screenContent = eval(operation);
        reset = 1;
    } else {                // sinon number
       if(lastTouch == "+") {
           screenContent = "";
       }
       operation += currentTouch;
       screenContent += currentTouch;
    }
    
    lastTouch = currentTouch;
    // afficher les valeurs dans le screen
    screen.textContent = screenContent;

    if(reset == 1) {
        reset = 0;
        screenContent = "";
        operation = "";
        lastTouch = "";
    }
}