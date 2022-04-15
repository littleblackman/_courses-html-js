<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link href="style.css" rel="stylesheet"/> 
</head>
<body>
    <h1>Calculatrice</h1>


    <div id="calculate">
        <div id="screen">.</div>
        <?php $val = 1;?>
        <?php for($j = 0; $j < 3; $j++):?>
            <div class="row">
                <?php for($i = 1; $i < 4; $i++):?>
                    <div class="touch" data-value="<?php echo $val;?>"><?php echo $val;?></div>
                    <?php $val++;?>
                <?php endfor;?>
            </div>
        <?php endfor;?>
        <div class="row">
            <?php foreach(['0', '+', '='] as $value):?>
                <div class="touch" data-value="<?php echo $val;?>"><?php echo $value;?></div>
            <?php endforeach;?>
        </div>


    </div>
    <script src="index.js" type="text/javascript"></script>
</body>
</html>