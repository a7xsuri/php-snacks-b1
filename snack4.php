<?php 
$numbers = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <main>
        <h2>Numeri casuali:</h2>
        <ul>
            <?php
            while (count($numbers) < 15){
                $randomNum = rand(1, 100);
                if (in_array($randomNum, $numbers)){
                }
                else {
                    $numbers[] = $randomNum;
                    ?><li><?php echo $randomNum ?></li>  <?php
                }
            }
            print_r($numbers);
            ?>
        </ul>
    </main>
</body>
</html>