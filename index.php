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

];

$email = $_GET['email'];
$nome = $_GET['name'];
$age = $_GET['age'];

if (strpos($email, '.') !== false && strpos($email, '@') !== false && strlen($nome) > 3 && is_int($age)){
    $success = 'accesso effettuato';
} else {
    $error = 'accesso negato';
}

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
    <div class="accesso">
        <?php echo $success; ?>
        <?php echo $error; ?>
    </div>
</body>
</html>