<?php

$BasketballMatch = [
    
    [
        'casa' => 'lakers',
        'ospite' => 'chicago',
        'punti casa' => '100',
        'punti ospite' => '109',
    ],
    [
        'casa' => 'celtics',
        'ospite' => 'raptors',
        'punti casa' => '101',
        'punti ospite' => '108',
    ],
    [
        'casa' => 'nets',
        'ospite' => 'suns',
        'punti casa' => '120',
        'punti ospite' => '119',
    ],

]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="squadra">
            <?php for ($i=0;$i < count($BasketballMatch); $i++) {
                echo "{$BasketballMatch[$i][casa]} - {$BasketballMatch[$i]['ospite']} | {$BasketballMatch[$i]['punti casa']} - {$BasketballMatch[$i]['punti ospite']} <br>";
            } ?>
    </div>
    <hr>
    
</body>
</html>