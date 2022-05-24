<?php 
$frase = "Ormai Hollywood è governata dal marketing, non dall’estro di un artista. E visto che Hollywood non mi piace più mi sono trasferita nel Nuovo Messico e scrivo sceneggiature. Non ho intenzione di smettere, ma quando non recito scappo nel mio ranch dove vivo la mia vita solitaria.";
$paragrafi = explode(".", $frase);
//var_dump($paragrafini);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <main>
        <h2>frasw</h2>
        <p><?php echo $frase ?></p>
        <h2>Paragrafi</h2>
        <?php
            foreach($paragrafi as $value){
                echo "<p> {$value}. </p>";
            }
        ?>

    </main>
</body>
</html>