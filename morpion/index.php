<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css"/>
    <title>Morpion</title>
</head>
<body>
    <h1 class="center">Morpion</h1>



    <div id="myGrid">
        <div class="myRow">
            <div data-name="1" class="myCel playable"></div>
            <div data-name="2" class="myCel playable"></div>
            <div data-name="3" class="myCel playable"></div>
        </div>
        <div class="myRow">
            <div data-name="4" class="myCel playable"></div>
            <div data-name="5" class="myCel playable"></div>
            <div data-name="6" class="myCel playable"></div>
        </div>
        <div class="myRow">
            <div data-name="7" class="myCel playable"></div>
            <div data-name="8" class="myCel playable"></div>
            <div data-name="9" class="myCel playable"></div>
        </div>
    </div>
    <br/>
    <div class="center">
        <button class="btn" id="validChoice">VALIDER</button>
    </div>


    <script src="index.js" type="text/javascript"></script>
</body>
</html>