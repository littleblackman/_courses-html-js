<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyShop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
    <!-- mon css perso -->
    <link rel="stylesheet" href="style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body style="margin: 0 auto; width: 900px;">
    
    <h1>Le pendu</h1>

    <?php $alphas = range('a', 'z');?>
    <?php foreach($alphas as $letter):?>
        <div class="letter"><?php echo $letter;?></div>
    <?php endforeach;?>

    <br style="clear: both"/>

    <hr/>


    <div id="showWord"></div>


<script>


    let words = ['celeste', 'paradis', 'ecologie', 'taxidermie', 'immatriculation', 'raccourci'];
    let key = Math.floor(Math.random() * words.length);
    let word = words[key];
    let lettersFounded = [];
    let letters = document.getElementsByClassName('letter');
    let showWord = document.getElementById('showWord');
    let nbTurn = 0;
    let maxTurn = 5;
    console.log(word);

    const showTheWord = () => {

        let showWordContent = "";
        let isEnded = true;

        // afficher le mot
        for (let i = 0; i < word.length; i++) {

            if( lettersFounded.includes(word.charAt(i))) {
                showWordContent += " "+word.charAt(i)+" ";
            } else {
                showWordContent += " _ ";
                isEnded = false;
            }
            showWord.textContent = showWordContent;
        }


        if(isEnded) {
            console.log('fini');
        } else {
            console.log(' pas fini');
        }
    }

    for(let i = 0; i < letters.length; i++) {
        letters[i].addEventListener('click', function() {
            check(this);
        });
    }

    const check = (el) => {

        let currentLetter = el.textContent;

        let isCorrect = false;

        // vérifie si la lettre est dans le mot
        for (let i = 0; i < word.length; i++) {


            // if wordchart == "é' alors wordchart = "e";

            if( currentLetter == word.charAt(i)) {
                isCorrect = true;
                lettersFounded.push(currentLetter);
            }
        }

        el.classList.add('clicked');
        console.log(lettersFounded);

        showTheWord();

        nbTurn++;

        if(nbTurn == maxTurn) {
            console.log('fini');
        } else {
            console.log('pas fini');
        }

    }
    
    showTheWord();

</script> 




</body>
</html>